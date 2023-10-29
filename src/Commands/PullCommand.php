<?php

namespace Kanekescom\Siasn\Referensi\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Kanekescom\Siasn\Api\Referensi\Exceptions\BadEndpointCallException;
use Kanekescom\Siasn\Referensi\Facades\Referensi;

class PullCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-referensi:pull
                        {endpoint? : Endpoint API}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Pull data to database from endpoint on SIASN Referensi API';

    /**
     * The console command choice map.
     *
     * @var string
     */
    protected $endpoints = [
        'agama' => '/agama',
        'alasan-hukuman-disiplin' => '/alasan-hukuman-disiplin',
        'asn-jenis-jabatan' => '/asn-jenis-jabatan',
        'asn-jenjang-jabatan' => '/asn-jenjang-jabatan',
        'eselon' => '/eselon',
        'golongan' => '/golongan',
        'instansi' => '/instansi',
        'jabatan-fungsional' => '/jabatan-fungsional',
        'jabatan-fungsional-umum' => '/jabatan-fungsional-umum',
        'jenis-anak' => '/jenis-anak',
        'jenis-diklat' => '/jenis-diklat',
        'jenis-hukuman' => '/jenis-hukuman',
        'jenis-jabatan' => '/jenis-jabatan',
        'kanreg' => '/kanreg',
        'kedudukan-hukum' => '/kedudukan-hukum',
        'kel-jabatan' => '/kel-jabatan',
        'latihan-struktural' => '/latihan-struktural',
        'lokasi' => '/lokasi',
        'pendidikan' => '/pendidikan',
        'ref-dokumen' => '/ref-dokumen',
        'ref-jenjang-jf' => '/ref-jenjang-jf',
        'satuan-kerja' => '/satuan-kerja',
        'tingkat-pendidikan' => '/tingkat-pendidikan',
    ];

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $endpointOptions = collect($this->endpoints);
        $endpoints = Str::of($this->argument('endpoint'))->explode(',');

        if (filled($endpoints->first()) && blank($endpoints = $endpointOptions->only($endpoints))) {
            throw new BadEndpointCallException('Endpoint does not exist.');
        }

        if (blank($endpoints->first())) {
            $endpoints = collect($this->choice(
                'What do you want to call endpoint? Separate with commas.',
                collect(['all' => 'all'])->merge($endpointOptions)->keys()->toArray(),
                0,
                null,
                true,
            ));

            if ($endpoints->contains('all')) {
                $endpoints = $endpointOptions;
            } else {
                $endpoints = $endpointOptions->only($endpoints);
            }
        }

        $start = now();
        $endpoints = $endpoints->keys();
        $endpointCount = $endpoints->count();
        $endpointErrors = collect([]);
        $i = 0;

        $endpoints->each(function ($endpoint) use ($endpointCount, &$endpointErrors, &$i) {
            $i++;
            $modelName = Str::of($endpoint)->studly();
            $modelClass = config("siasn-referensi.models.{$modelName->snake()}");
            $model = new $modelClass;
            $referensiMethod = 'get' . $modelName;

            $this->info("[{$i}/{$endpointCount}] {$endpoint}");

            try {
                $response = Referensi::$referensiMethod();

                if ($response->count() == 0) {
                    $errorMessage = 'Data not found';
                    $endpointErrors->put($endpoint, $errorMessage);
                    $this->components->error($errorMessage);

                    return self::FAILURE;
                }
            } catch (\Exception $e) {
                $errorMessage = $e->getMessage();
                $endpointErrors->put($endpoint, $errorMessage);
                $this->components->error($errorMessage);

                return self::FAILURE;
            }

            try {
                $bar = $this->output->createProgressBar($response->count());
                $bar->start();

                DB::transaction(function () use ($model, $response, $bar) {
                    if (config('siasn-referensi.delete_model_before_pull')) {
                        $model->query()->delete();
                    }

                    $response->chunk(config('siasn-referensi.chunk_data'))->each(function ($item) use ($model, $bar) {
                        $model->upsert($item->toArray(), 'id');
                        $model->query()
                            ->withTrashed()
                            ->whereIn('id', $item->pluck('id'))
                            ->restore();

                        $bar->advance($item->count());
                    });
                });

                $bar->finish();

                $this->newLine(2);
            } catch (\Exception $e) {
                $errorMessage = $e->getMessage();
                $endpointErrors->put($endpoint, $errorMessage);
                $this->components->error($errorMessage);

                return self::FAILURE;
            }
        });

        if ($endpointErrors) {
            $this->components->info("There is {$endpointErrors->count()} error(s):");

            $endpointErrors->each(function ($value, $key) {
                $this->line("<bg=red> {$key} </> {$value} ");
                $this->newLine();
            });

            $this->newLine();
        }

        $this->comment("All tasks are processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
