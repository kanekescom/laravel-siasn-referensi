<?php

namespace Kanekescom\SiasnReferensi\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class BulkImport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn:bulk-import-ref
                            {--ref= : The resource you want to import. Separate with comma. Separate with commas.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import all reference what you want';

    /**
     * The console command choice map.
     *
     * @var string
     */
    protected $refs = [
        'agama' => 'siasn-import:agama-ref',
        'alasan-hukdis' => 'siasn-import:alasan-hukdis-ref',
        'cltn' => 'siasn-import:cltn-ref',
        'diklat-struktural' => 'siasn-import:diklat-struktural-ref',
        'dokumen' => 'siasn-import:dokumen-ref',
        'eselon' => 'siasn-import:eselon-ref',
        'golongan' => 'siasn-import:golongan-ref',
        'instansi' => 'siasn-import:instansi-ref',
        'jabatan-fungsional' => 'siasn-import:jabatan-fungsional-ref',
        'jabatan-fungsional-umum' => 'siasn-import:jabatan-fungsional-umum-ref',
        'jenis-diklat' => 'siasn-import:jenis-diklat-ref',
        'jenis-hukuman' => 'siasn-import:jenis-hukuman-ref',
        'jenis-id-dokumen' => 'siasn-import:jenis-id-dokumen-ref',
        'jenis-jabatan' => 'siasn-import:jenis-jabatan-ref',
        'jenis-kawin' => 'siasn-import:jenis-kawin-ref',
        'jenis-kelamin' => 'siasn-import:jenis-kelamin-ref',
        'jenis-kepanitiaan' => 'siasn-import:jenis-kepanitiaan-ref',
        'jenis-kompetensi' => 'siasn-import:jenis-kompetensi-ref',
        'jenis-kp' => 'siasn-import:jenis-kp-ref',
        'jenis-kursus' => 'siasn-import:jenis-kursus-ref',
        'jenis-pegawai' => 'siasn-import:jenis-pegawai-ref',
        'jenis-pemberhentian' => 'siasn-import:jenis-pemberhentian-ref',
        'jenis-pengadaan' => 'siasn-import:jenis-pengadaan-ref',
        'jenis-pensiun' => 'siasn-import:jenis-pensiun-ref',
        'jenis-riwayat' => 'siasn-import:jenis-riwayat-ref',
        'jenis-unor' => 'siasn-import:jenis-unor-ref',
        'kabupaten' => 'siasn-import:kabupaten-ref',
        'kanreg' => 'siasn-import:kanreg-ref',
        'kedudukan-hukum' => 'siasn-import:kedudukan-hukum-ref',
        'kelompok-jabatan' => 'siasn-import:kelompok-jabatan-ref',
        'kpkn' => 'siasn-import:kpkn-ref',
        'lokasi' => 'siasn-import:lokasi-ref',
        'pendidikan' => 'siasn-import:pendidikan-ref',
        'penghargaan' => 'siasn-import:penghargaan-ref',
        'profesi' => 'siasn-import:profesi-ref',
        'rumpun-jabatan' => 'siasn-import:rumpun-jabatan-ref',
        'satuan-kerja' => 'siasn-import:satuan-kerja-ref',
        'taspen' => 'siasn-import:taspen-ref',
        'tingkat-hukuman' => 'siasn-import:tingkat-hukuman-ref',
        'tingkat-pendidikan' => 'siasn-import:tingkat-pendidikan-ref',
        'unor' => 'siasn-import:unor-ref',
    ];

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $ref = Str::of($this->option('ref'))->explode(',');
        $refs = collect($this->refs);
        $start = now();

        if (blank($ref->first())) {
            $chosen = collect($this->choice(
                'What do you want to import? Separate with commas.',
                collect($this->refs)->prepend('all', 'all')->keys()->toArray(),
                0,
                null,
                true
            ));

            if ($chosen->contains('all')) {
                $chosen = collect();
            }

            if ($chosen->isNotEmpty()) {
                $refs = $refs->only($chosen);
            }
        }

        if (filled($ref->first())) {
            $refs = $refs->only($ref);
        }


        $this->withProgressBar($refs, function ($item) {
            Artisan::call($item);
        });

        $this->newLine();
        $this->comment("Processed in {$start->diffInSeconds(now())} seconds");
    }
}
