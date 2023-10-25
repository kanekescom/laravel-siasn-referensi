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
                'create_siasn_referensi_agama_table',
                'create_siasn_referensi_alasan_hukuman_disiplin_table',
                'create_siasn_referensi_asn_jenis_jabatan_table',
                'create_siasn_referensi_asn_jenjang_jabatan_table',
                'create_siasn_referensi_eselon_table',
                'create_siasn_referensi_golongan_table',
                'create_siasn_referensi_instansi_table',
                'create_siasn_referensi_jabatan_fungsional_table',
                'create_siasn_referensi_jabatan_fungsional_umum_table',
                'create_siasn_referensi_jenis_anak_table',
                'create_siasn_referensi_jenis_diklat_table',
                'create_siasn_referensi_jenis_hukuman_table',
                'create_siasn_referensi_jenis_jabatan_table',
                'create_siasn_referensi_kanreg_table',
                'create_siasn_referensi_kedudukan_hukum_table',
                'create_siasn_referensi_kel_jabatan_table',
                'create_siasn_referensi_latihan_struktural_table',
                'create_siasn_referensi_lokasi_table',
                'create_siasn_referensi_pendidikan_table',
                'create_siasn_referensi_ref_dokumen_table',
                'create_siasn_referensi_ref_jenjang_jf_table',
                'create_siasn_referensi_satuan_kerja_table',
                'create_siasn_referensi_tingkat_pendidikan_table',
            ])
            ->runsMigrations()
            ->hasCommand(Commands\PullCommand::class);
    }
}
