<?php

namespace Kanekescom\Siasn\Referensi\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Kanekescom\Siasn\Referensi\Api\Exceptions\BadEndpointCallException;
use Kanekescom\Siasn\Referensi\Facades\Referensi;
use Kanekescom\Siasn\Referensi\Models;

class PullCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-referensi:pull
                            {endpoint?* : Endpoint API}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Pull data to database from endpoint on SIASN Referensi API';

    protected $endpoints = [
        'agama' => [
            'model' => Models\Agama::class,
            'method' => 'getAgama',
        ],
        'alasan-hukuman-disiplin' => [
            'model' => Models\AlasanHukumanDisiplin::class,
            'method' => 'getAlasanHukumanDisiplin',
        ],
        'asn-jenis-jabatan' => [
            'model' => Models\AsnJenisJabatan::class,
            'method' => 'getAsnJenisJabatan',
        ],
        'asn-jenjang-jabatan' => [
            'model' => Models\AsnJenjangJabatan::class,
            'method' => 'getAsnJenjangJabatan',
        ],
        'eselon' => [
            'model' => Models\Eselon::class,
            'method' => 'getEselon',
        ],
        'golongan' => [
            'model' => Models\Golongan::class,
            'method' => 'getGolongan',
        ],
        'instansi' => [
            'model' => Models\Instansi::class,
            'method' => 'getInstansi',
        ],
        'jabatan-fungsional' => [
            'model' => Models\JabatanFungsional::class,
            'method' => 'getJabatanFungsional',
        ],
        'jabatan-fungsional-umum' => [
            'model' => Models\JabatanFungsionalUmum::class,
            'method' => 'getJabatanFungsionalUmum',
        ],
        'jenis-anak' => [
            'model' => Models\JenisAnak::class,
            'method' => 'getJenisAnak',
        ],
        'jenis-hukuman' => [
            'model' => Models\JenisHukuman::class,
            'method' => 'getJenisHukuman',
        ],
        'jenis-jabatan' => [
            'model' => Models\JenisJabatan::class,
            'method' => 'getJenisJabatan',
        ],
        'kanreg' => [
            'model' => Models\Kanreg::class,
            'method' => 'getKanreg',
        ],
        'kedudukan-hukum' => [
            'model' => Models\KedudukanHukum::class,
            'method' => 'getKedudukanHukum',
        ],
        'kel-jabatan' => [
            'model' => Models\KelJabatan::class,
            'method' => 'getKelJabatan',
        ],
        'latihan-struktural' => [
            'model' => Models\LatihanStruktural::class,
            'method' => 'getLatihanStruktural',
        ],
        'lokasi' => [
            'model' => Models\Lokasi::class,
            'method' => 'getLokasi',
        ],
        'pendidikan' => [
            'model' => Models\Pendidikan::class,
            'method' => 'getPendidikan',
        ],
        'ref-dokumen' => [
            'model' => Models\RefDokumen::class,
            'method' => 'getRefDokumen',
        ],
        'ref-jenjang-jf' => [
            'model' => Models\RefJenjangJf::class,
            'method' => 'getRefJenjangJf',
        ],
        'satuan-kerja' => [
            'model' => Models\SatuanKerja::class,
            'method' => 'getSatuanKerja',
        ],
        'tingkat-pendidikan' => [
            'model' => Models\TingkatPendidikan::class,
            'method' => 'getTingkatPendidikan',
        ],
        'jenis-diklat' => [
            'model' => Models\JenisDiklat::class,
            'method' => 'getJenisDiklat',
        ],
    ];

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $endpointOptions = collect($this->endpoints)
            ->keys()
            ->mapWithKeys(fn ($item) => [$item => $item]);
        $endpoints = collect($this->argument('endpoint'));

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
        $iEndpoint = 0;

        $endpoints->each(function ($endpoint) use ($endpointCount, &$endpointErrors, &$iEndpoint) {
            $iEndpoint++;
            $model = new $this->endpoints[$endpoint]['model'];
            $method = $this->endpoints[$endpoint]['method'];

            $this->info("[{$iEndpoint}/{$endpointCount}] {$endpoint}");

            try {
                $response = Referensi::$method();

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
                    if (config('siasn-referensi.truncate_model_before_pull')) {
                        $model->query()
                            ->delete();
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
        }

        $this->comment("All tasks are processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
