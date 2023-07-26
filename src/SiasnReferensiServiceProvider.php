<?php

namespace Kanekescom\SiasnReferensi;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class SiasnReferensiServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->offerPublishing();

        $this->registerCommands();
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/siasn-referensi.php', 'siasn-referensi');

        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\AgamaRepository::class, \Kanekescom\SiasnReferensi\Repositories\AgamaRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\AlasanHukdisRepository::class, \Kanekescom\SiasnReferensi\Repositories\AlasanHukdisRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\CltnRepository::class, \Kanekescom\SiasnReferensi\Repositories\CltnRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\DiklatStrukturalRepository::class, \Kanekescom\SiasnReferensi\Repositories\DiklatStrukturalRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\DokumenRepository::class, \Kanekescom\SiasnReferensi\Repositories\DokumenRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\EselonRepository::class, \Kanekescom\SiasnReferensi\Repositories\EselonRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\GolonganRepository::class, \Kanekescom\SiasnReferensi\Repositories\GolonganRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\InstansiRepository::class, \Kanekescom\SiasnReferensi\Repositories\InstansiRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\JabatanFungsionalRepository::class, \Kanekescom\SiasnReferensi\Repositories\JabatanFungsionalRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\JabatanFungsionalUmumRepository::class, \Kanekescom\SiasnReferensi\Repositories\JabatanFungsionalUmumRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\JenisDiklatRepository::class, \Kanekescom\SiasnReferensi\Repositories\JenisDiklatRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\JenisHukumanRepository::class, \Kanekescom\SiasnReferensi\Repositories\JenisHukumanRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\JenisIdDokumenRepository::class, \Kanekescom\SiasnReferensi\Repositories\JenisIdDokumenRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\JenisJabatanRepository::class, \Kanekescom\SiasnReferensi\Repositories\JenisJabatanRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\JenisKawinRepository::class, \Kanekescom\SiasnReferensi\Repositories\JenisKawinRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\JenisKelaminRepository::class, \Kanekescom\SiasnReferensi\Repositories\JenisKelaminRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\JenisKepanitiaanRepository::class, \Kanekescom\SiasnReferensi\Repositories\JenisKepanitiaanRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\JenisKompetensiRepository::class, \Kanekescom\SiasnReferensi\Repositories\JenisKompetensiRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\JenisKpRepository::class, \Kanekescom\SiasnReferensi\Repositories\JenisKpRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\JenisKursusRepository::class, \Kanekescom\SiasnReferensi\Repositories\JenisKursusRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\JenisPegawaiRepository::class, \Kanekescom\SiasnReferensi\Repositories\JenisPegawaiRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\JenisPemberhentianRepository::class, \Kanekescom\SiasnReferensi\Repositories\JenisPemberhentianRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\JenisPengadaanRepository::class, \Kanekescom\SiasnReferensi\Repositories\JenisPengadaanRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\JenisPensiunRepository::class, \Kanekescom\SiasnReferensi\Repositories\JenisPensiunRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\JenisRiwayatRepository::class, \Kanekescom\SiasnReferensi\Repositories\JenisRiwayatRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\JenisUnorRepository::class, \Kanekescom\SiasnReferensi\Repositories\JenisUnorRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\KabupatenRepository::class, \Kanekescom\SiasnReferensi\Repositories\KabupatenRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\KanregRepository::class, \Kanekescom\SiasnReferensi\Repositories\KanregRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\KedudukanHukumRepository::class, \Kanekescom\SiasnReferensi\Repositories\KedudukanHukumRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\KelompokJabatanRepository::class, \Kanekescom\SiasnReferensi\Repositories\KelompokJabatanRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\KpknRepository::class, \Kanekescom\SiasnReferensi\Repositories\KpknRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\LokasiRepository::class, \Kanekescom\SiasnReferensi\Repositories\LokasiRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\PendidikanRepository::class, \Kanekescom\SiasnReferensi\Repositories\PendidikanRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\PenghargaanRepository::class, \Kanekescom\SiasnReferensi\Repositories\PenghargaanRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\ProfesiRepository::class, \Kanekescom\SiasnReferensi\Repositories\ProfesiRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\RumpunJabatanRepository::class, \Kanekescom\SiasnReferensi\Repositories\RumpunJabatanRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\SatuanKerjaRepository::class, \Kanekescom\SiasnReferensi\Repositories\SatuanKerjaRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\TaspenRepository::class, \Kanekescom\SiasnReferensi\Repositories\TaspenRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\TingkatHukumanRepository::class, \Kanekescom\SiasnReferensi\Repositories\TingkatHukumanRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\TingkatPendidikanRepository::class, \Kanekescom\SiasnReferensi\Repositories\TingkatPendidikanRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\UnorRepository::class, \Kanekescom\SiasnReferensi\Repositories\UnorRepositoryEloquent::class);
    }

    /**
     * Offer publishing.
     *
     * @return void
     */
    protected function offerPublishing(): void
    {
        if (!$this->app->runningInConsole()) {
            return;
        }

        if (!function_exists('config_path')) {
            // function not available and 'publish' not relevant in Lumen
            return;
        }

        $this->publishes([
            __DIR__ . '/../config/siasn-referensi.php' => config_path('siasn-referensi.php'),
        ], 'config');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_agama_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_agama_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_alasan_hukdis_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_alasan_hukdis_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_cltn_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_cltn_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_diklat_struktural_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_diklat_struktural_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_dokumen_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_dokumen_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_eselon_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_eselon_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_golongan_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_golongan_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_instansi_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_instansi_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_jabatan_fungsional_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_jabatan_fungsional_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_jabatan_fungsional_umum_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_jabatan_fungsional_umum_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_jenis_diklat_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_jenis_diklat_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_jenis_hukuman_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_jenis_hukuman_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_jenis_id_dokumen_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_jenis_id_dokumen_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_jenis_jabatan_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_jenis_jabatan_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_jenis_kawin_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_jenis_kawin_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_jenis_kelamin_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_jenis_kelamin_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_jenis_kepanitiaan_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_jenis_kepanitiaan_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_jenis_kompetensi_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_jenis_kompetensi_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_jenis_kp_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_jenis_kp_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_jenis_kursus_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_jenis_kursus_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_jenis_pegawai_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_jenis_pegawai_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_jenis_pemberhentian_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_jenis_pemberhentian_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_jenis_pengadaan_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_jenis_pengadaan_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_jenis_pensiun_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_jenis_pensiun_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_jenis_riwayat_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_jenis_riwayat_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_jenis_unor_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_jenis_unor_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_kabupaten_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_kabupaten_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_kanreg_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_kanreg_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_kedudukan_hukum_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_kedudukan_hukum_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_kelompok_jabatan_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_kelompok_jabatan_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_kpkn_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_kpkn_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_lokasi_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_lokasi_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_pendidikan_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_pendidikan_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_penghargaan_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_penghargaan_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_profesi_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_profesi_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_rumpun_jabatan_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_rumpun_jabatan_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_satuan_kerja_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_satuan_kerja_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_taspen_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_taspen_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_tingkat_hukuman_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_tingkat_hukuman_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_tingkat_pendidikan_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_tingkat_pendidikan_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_unor_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_unor_table.php'),
        ], 'migrations');
    }

    /**
     * Register commands.
     *
     * @return void
     */
    protected function registerCommands(): void
    {
        if (!$this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            Commands\BulkImport::class,

            Commands\AgamaImport::class,
            Commands\AlasanHukdisImport::class,
            Commands\CltnImport::class,
            Commands\DiklatStrukturalImport::class,
            Commands\DokumenImport::class,
            Commands\EselonImport::class,
            Commands\GolonganImport::class,
            Commands\InstansiImport::class,
            Commands\JabatanFungsionalImport::class,
            Commands\JabatanFungsionalUmumImport::class,
            Commands\JenisDiklatImport::class,
            Commands\JenisHukumanImport::class,
            Commands\JenisIdDokumenImport::class,
            Commands\JenisJabatanImport::class,
            Commands\JenisKawinImport::class,
            Commands\JenisKelaminImport::class,
            Commands\JenisKepanitiaanImport::class,
            Commands\JenisKompetensiImport::class,
            Commands\JenisKpImport::class,
            Commands\JenisKursusImport::class,
            Commands\JenisPegawaiImport::class,
            Commands\JenisPemberhentianImport::class,
            Commands\JenisPengadaanImport::class,
            Commands\JenisPensiunImport::class,
            Commands\JenisRiwayatImport::class,
            Commands\JenisUnorImport::class,
            Commands\KabupatenImport::class,
            Commands\KanregImport::class,
            Commands\KedudukanHukumImport::class,
            Commands\KelompokJabatanImport::class,
            Commands\KpknImport::class,
            Commands\LokasiImport::class,
            Commands\PendidikanImport::class,
            Commands\PenghargaanImport::class,
            Commands\ProfesiImport::class,
            Commands\RumpunJabatanImport::class,
            Commands\SatuanKerjaImport::class,
            Commands\TaspenImport::class,
            Commands\TingkatHukumanImport::class,
            Commands\TingkatPendidikanImport::class,
            Commands\UnorImport::class,
        ]);
    }

    /**
     * Returns existing migration file if found, else uses the current timestamp.
     */
    protected function getMigrationFileName(string $migrationFileName): string
    {
        $timestamp = date('Y_m_d_His');

        return Collection::make([$this->app->databasePath() . DIRECTORY_SEPARATOR . 'migrations' . DIRECTORY_SEPARATOR])
            ->flatMap(function ($path) use ($migrationFileName) {
                $filesystem = $this->app->make(Filesystem::class);

                return $filesystem->glob($path . '*_' . $migrationFileName);
            })
            ->push($this->app->databasePath() . "/migrations/{$timestamp}_{$migrationFileName}")
            ->first();
    }
}
