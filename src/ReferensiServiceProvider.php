<?php

namespace Kanekescom\Siasn\Referensi;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\ServiceProvider;

class ReferensiServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     */
    public function boot(): void
    {
        $this->offerPublishing();

        $this->registerCommands();
    }

    /**
     * Register any package services.
     */
    public function register(): void
    {
        $this->app->bind(\Kanekescom\Siasn\Referensi\Repositories\AgamaRepository::class, \Kanekescom\Siasn\Referensi\Repositories\AgamaRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\Siasn\Referensi\Repositories\AlasanHukumanDisiplinRepository::class, \Kanekescom\Siasn\Referensi\Repositories\AlasanHukumanDisiplinRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\Siasn\Referensi\Repositories\AsnJenisJabatanRepository::class, \Kanekescom\Siasn\Referensi\Repositories\AsnJenisJabatanRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\Siasn\Referensi\Repositories\AsnJenjangJabatanRepository::class, \Kanekescom\Siasn\Referensi\Repositories\AsnJenjangJabatanRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\Siasn\Referensi\Repositories\EselonRepository::class, \Kanekescom\Siasn\Referensi\Repositories\EselonRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\Siasn\Referensi\Repositories\GolonganRepository::class, \Kanekescom\Siasn\Referensi\Repositories\GolonganRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\Siasn\Referensi\Repositories\InstansiRepository::class, \Kanekescom\Siasn\Referensi\Repositories\InstansiRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\Siasn\Referensi\Repositories\JabatanFungsionalRepository::class, \Kanekescom\Siasn\Referensi\Repositories\JabatanFungsionalRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\Siasn\Referensi\Repositories\JabatanFungsionalUmumRepository::class, \Kanekescom\Siasn\Referensi\Repositories\JabatanFungsionalUmumRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\Siasn\Referensi\Repositories\JenisAnakRepository::class, \Kanekescom\Siasn\Referensi\Repositories\JenisAnakRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\Siasn\Referensi\Repositories\JenisDiklatRepository::class, \Kanekescom\Siasn\Referensi\Repositories\JenisDiklatRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\Siasn\Referensi\Repositories\JenisHukumanRepository::class, \Kanekescom\Siasn\Referensi\Repositories\JenisHukumanRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\Siasn\Referensi\Repositories\JenisJabatanRepository::class, \Kanekescom\Siasn\Referensi\Repositories\JenisJabatanRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\Siasn\Referensi\Repositories\KanregRepository::class, \Kanekescom\Siasn\Referensi\Repositories\KanregRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\Siasn\Referensi\Repositories\KedudukanHukumRepository::class, \Kanekescom\Siasn\Referensi\Repositories\KedudukanHukumRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\Siasn\Referensi\Repositories\KelJabatanRepository::class, \Kanekescom\Siasn\Referensi\Repositories\KelJabatanRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\Siasn\Referensi\Repositories\LatihanStrukturalRepository::class, \Kanekescom\Siasn\Referensi\Repositories\LatihanStrukturalRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\Siasn\Referensi\Repositories\LokasiRepository::class, \Kanekescom\Siasn\Referensi\Repositories\LokasiRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\Siasn\Referensi\Repositories\PendidikanRepository::class, \Kanekescom\Siasn\Referensi\Repositories\PendidikanRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\Siasn\Referensi\Repositories\RefDokumenRepository::class, \Kanekescom\Siasn\Referensi\Repositories\RefDokumenRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\Siasn\Referensi\Repositories\RefJenjangJfRepository::class, \Kanekescom\Siasn\Referensi\Repositories\RefJenjangJfRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\Siasn\Referensi\Repositories\SatuanKerjaRepository::class, \Kanekescom\Siasn\Referensi\Repositories\SatuanKerjaRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\Siasn\Referensi\Repositories\TingkatPendidikanRepository::class, \Kanekescom\Siasn\Referensi\Repositories\TingkatPendidikanRepositoryEloquent::class);
    }

    /**
     * Offer publishing.
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
            __DIR__ . '/../database/migrations/create_siasn_referensi_agama_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_agama_table.php'),
            __DIR__ . '/../database/migrations/create_siasn_referensi_alasan_hukuman_disiplin_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_alasan_hukuman_disiplin_table.php'),
            __DIR__ . '/../database/migrations/create_siasn_referensi_asn_jenis_jabatan_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_asn_jenis_jabatan_table.php'),
            __DIR__ . '/../database/migrations/create_siasn_referensi_asn_jenjang_jabatan_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_asn_jenjang_jabatan_table.php'),
            __DIR__ . '/../database/migrations/create_siasn_referensi_eselon_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_eselon_table.php'),
            __DIR__ . '/../database/migrations/create_siasn_referensi_golongan_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_golongan_table.php'),
            __DIR__ . '/../database/migrations/create_siasn_referensi_instansi_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_instansi_table.php'),
            __DIR__ . '/../database/migrations/create_siasn_referensi_jabatan_fungsional_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_jabatan_fungsional_table.php'),
            __DIR__ . '/../database/migrations/create_siasn_referensi_jabatan_fungsional_umum_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_jabatan_fungsional_umum_table.php'),
            __DIR__ . '/../database/migrations/create_siasn_referensi_jenis_anak_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_jenis_anak_table.php'),
            __DIR__ . '/../database/migrations/create_siasn_referensi_jenis_diklat_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_jenis_diklat_table.php'),
            __DIR__ . '/../database/migrations/create_siasn_referensi_jenis_hukuman_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_jenis_hukuman_table.php'),
            __DIR__ . '/../database/migrations/create_siasn_referensi_jenis_jabatan_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_jenis_jabatan_table.php'),
            __DIR__ . '/../database/migrations/create_siasn_referensi_kanreg_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_kanreg_table.php'),
            __DIR__ . '/../database/migrations/create_siasn_referensi_kedudukan_hukum_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_kedudukan_hukum_table.php'),
            __DIR__ . '/../database/migrations/create_siasn_referensi_kel_jabatan_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_kel_jabatan_table.php'),
            __DIR__ . '/../database/migrations/create_siasn_referensi_latihan_struktural_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_latihan_struktural_table.php'),
            __DIR__ . '/../database/migrations/create_siasn_referensi_lokasi_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_lokasi_table.php'),
            __DIR__ . '/../database/migrations/create_siasn_referensi_pendidikan_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_pendidikan_table.php'),
            __DIR__ . '/../database/migrations/create_siasn_referensi_ref_dokumen_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_ref_dokumen_table.php'),
            __DIR__ . '/../database/migrations/create_siasn_referensi_ref_jenjang_jf_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_ref_jenjang_jf_table.php'),
            __DIR__ . '/../database/migrations/create_siasn_referensi_satuan_kerja_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_satuan_kerja_table.php'),
            __DIR__ . '/../database/migrations/create_siasn_referensi_tingkat_pendidikan_table.php.stub' => $this->getMigrationFileName('create_siasn_referensi_tingkat_pendidikan_table.php'),
        ], 'migrations');
    }

    /**
     * Register commands.
     */
    protected function registerCommands(): void
    {
        if (!$this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            Commands\PullReferensi::class,
        ]);
    }

    /**
     * Returns existing migration file if found, else uses the current timestamp.
     */
    protected function getMigrationFileName(string $migrationFileName): string
    {
        $timestamp = date('Y_m_d_His');

        return collect([$this->app->databasePath() . DIRECTORY_SEPARATOR . 'migrations' . DIRECTORY_SEPARATOR])
            ->flatMap(function ($path) use ($migrationFileName) {
                $filesystem = $this->app->make(Filesystem::class);

                return $filesystem->glob($path . '*_' . $migrationFileName);
            })
            ->push($this->app->databasePath() . "/migrations/{$timestamp}_{$migrationFileName}")
            ->first();
    }
}
