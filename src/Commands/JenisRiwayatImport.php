<?php

namespace Kanekescom\SiasnReferensi\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Kanekescom\SiasnReferensi\Repositories\JenisRiwayatRepository;
use Kanekescom\SiasnReferensi\Services\JenisRiwayatDataset;

class JenisRiwayatImport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-import:jenis-riwayat-ref';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import jenis riwayat reference from SIASN Reference datasets';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $start = now();
        $repository = app(JenisRiwayatRepository::class);
        $repository->deleteAll();
        $data = JenisRiwayatDataset::get();

        $bar = $this->output->createProgressBar($data->count());
        $bar->start();

        DB::transaction(function () use ($data, $repository, $bar) {
            $data->chunk(1000)->each(function ($item) use ($repository, $bar) {
                $repository->upsert($item->toArray(), 'id');
                $repository->restoreById($item->pluck('id'));

                $bar->advance();
            });
        });

        $bar->finish();

        $this->newLine();
        $this->comment("Processed in {$start->diffInSeconds(now())} seconds");
    }
}