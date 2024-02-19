<?php

namespace Kanekescom\Siasn\Referensi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ReferensiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-siasn-referensi')
            ->hasConfigFile()
            ->hasMigrations([
                '2024_01_01_000001_create_siasn_referensi_agama_table',
                '2024_01_01_000002_create_siasn_referensi_alasan_hukuman_disiplin_table',
                '2024_01_01_000003_create_siasn_referensi_asn_jenis_jabatan_table',
                '2024_01_01_000004_create_siasn_referensi_asn_jenjang_jabatan_table',
                '2024_01_01_000005_create_siasn_referensi_eselon_table',
                '2024_01_01_000006_create_siasn_referensi_golongan_table',
                '2024_01_01_000007_create_siasn_referensi_instansi_table',
                '2024_01_01_000008_create_siasn_referensi_jabatan_fungsional_table',
                '2024_01_01_000009_create_siasn_referensi_jabatan_fungsional_umum_table',
                '2024_01_01_000010_create_siasn_referensi_jenis_anak_table',
                '2024_01_01_000011_create_siasn_referensi_jenis_hukuman_table',
                '2024_01_01_000012_create_siasn_referensi_jenis_jabatan_table',
                '2024_01_01_000013_create_siasn_referensi_kanreg_table',
                '2024_01_01_000014_create_siasn_referensi_kedudukan_hukum_table',
                '2024_01_01_000015_create_siasn_referensi_kel_jabatan_table',
                '2024_01_01_000016_create_siasn_referensi_latihan_struktural_table',
                '2024_01_01_000017_create_siasn_referensi_lokasi_table',
                '2024_01_01_000018_create_siasn_referensi_pendidikan_table',
                '2024_01_01_000019_create_siasn_referensi_ref_dokumen_table',
                '2024_01_01_000020_create_siasn_referensi_ref_jenjang_jf_table',
                '2024_01_01_000021_create_siasn_referensi_satuan_kerja_table',
                '2024_01_01_000022_create_siasn_referensi_tingkat_pendidikan_table',
                '2024_01_01_000023_create_siasn_referensi_jenis_diklat_table',
            ])
            ->runsMigrations()
            ->hasCommand(Commands\PullCommand::class);
    }
}
