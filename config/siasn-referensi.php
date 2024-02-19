<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Models
    |--------------------------------------------------------------------------
    |
    | This option controls which model will be used when using this library.
    |
    */

    'models' => [
        'agama' => Kanekescom\Siasn\Referensi\Models\Agama::class,
        'alasan_hukuman_disiplin' => Kanekescom\Siasn\Referensi\Models\AlasanHukumanDisiplin::class,
        'asn_jenis_jabatan' => Kanekescom\Siasn\Referensi\Models\AsnJenisJabatan::class,
        'asn_jenjang_jabatan' => Kanekescom\Siasn\Referensi\Models\AsnJenjangJabatan::class,
        'eselon' => Kanekescom\Siasn\Referensi\Models\Eselon::class,
        'golongan' => Kanekescom\Siasn\Referensi\Models\Golongan::class,
        'instansi' => Kanekescom\Siasn\Referensi\Models\Instansi::class,
        'jabatan_fungsional' => Kanekescom\Siasn\Referensi\Models\JabatanFungsional::class,
        'jabatan_fungsional_umum' => Kanekescom\Siasn\Referensi\Models\JabatanFungsionalUmum::class,
        'jenis_anak' => Kanekescom\Siasn\Referensi\Models\JenisAnak::class,
        'jenis_diklat' => Kanekescom\Siasn\Referensi\Models\JenisDiklat::class,
        'jenis_hukuman' => Kanekescom\Siasn\Referensi\Models\JenisHukuman::class,
        'jenis_jabatan' => Kanekescom\Siasn\Referensi\Models\JenisJabatan::class,
        'kanreg' => Kanekescom\Siasn\Referensi\Models\Kanreg::class,
        'kedudukan_hukum' => Kanekescom\Siasn\Referensi\Models\KedudukanHukum::class,
        'kel_jabatan' => Kanekescom\Siasn\Referensi\Models\KelJabatan::class,
        'latihan_struktural' => Kanekescom\Siasn\Referensi\Models\LatihanStruktural::class,
        'lokasi' => Kanekescom\Siasn\Referensi\Models\Lokasi::class,
        'pendidikan' => Kanekescom\Siasn\Referensi\Models\Pendidikan::class,
        'ref_dokumen' => Kanekescom\Siasn\Referensi\Models\RefDokumen::class,
        'ref_jenjang_jf' => Kanekescom\Siasn\Referensi\Models\RefJenjangJf::class,
        'satuan_kerja' => Kanekescom\Siasn\Referensi\Models\SatuanKerja::class,
        'tingkat_pendidikan' => Kanekescom\Siasn\Referensi\Models\TingkatPendidikan::class,
    ],

    'chunk_data' => 500,

    'delete_model_before_pull' => true,

    'filament' => [
        'id' => 'siasn-referensi',
        'path' => 'siasn/referensi',
    ],

];
