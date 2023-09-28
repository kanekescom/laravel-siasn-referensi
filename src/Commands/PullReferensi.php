<?php

namespace Kanekescom\Siasn\Referensi\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PullReferensi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-referensi:pull-referensi
                            {--endpoint= : Endpoint API}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Pull data from endpoint on SIASN Referensi API';

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
        $endpoints = Str::of($this->option('endpoint'))->explode(',');

        if (filled($endpoints->first()) && blank($endpoints = $endpointOptions->only($endpoints))) {
            $this->error('Invalid endpoints.');
        }

        if (blank($endpoints->first())) {
            $endpoints = collect($this->choice(
                'What do you want to call endpoint? Separate with commas.',
                collect(['all' => 'all'])->merge($endpointOptions)->keys()->toArray(),
                0,
                null,
                true,
            ));
        }

        $start = now();

        if ($endpoints->contains('all')) {
            $endpoints = $endpointOptions;
        }

        $endpoints = $endpoints->keys();
        $endpointCount = $endpoints->count();
        $i = 0;

        $endpoints->each(function ($endpoint) use ($endpointCount, &$i) {
            $i++;
            $endpointClass = Str::studly($endpoint);
            $modelClass = 'Kanekescom\Siasn\Api\Referensi\Models\\' . $endpointClass;
            $repositoryClass = 'Kanekescom\Siasn\Referensi\Repositories\\' . $endpointClass . 'Repository';
            $repository = app($repositoryClass);

            try {
                $this->info("[{$i}/{$endpointCount}] {$endpoint}");

                $data = new $modelClass;

                $bar = $this->output->createProgressBar($data->count());
                $bar->start();

                DB::transaction(function () use ($data, $repository, $bar) {
                    $repository->query()
                        ->delete();

                    $data->chunk(500)->each(function ($item) use ($repository, $bar) {
                        $repository->upsert($item->toArray(), 'id');
                        $repository->query()
                            ->withTrashed()
                            ->whereIn('id', $item->pluck('id'))
                            ->restore();

                        $bar->advance($item->count());
                    });
                });

                $bar->finish();

                $this->newLine();
                $this->newLine();
            } catch (\Exception $e) {
                $this->error($e);
                $this->newLine();
            }
        });

        $this->comment("All tasks are processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");
    }
}
