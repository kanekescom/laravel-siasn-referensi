<?php

namespace Kanekescom\SiasnReferensi\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Kanekescom\SiasnReferensi\Repositories\JabatanFungsionalUmumRepository;
use Kanekescom\SiasnReferensi\Services\JabatanFungsionalUmumDataset;

class JabatanFungsionalUmumImport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-import:jabatan-fungsional-umum-ref';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import jabatan fungsional umum reference from SIASN Reference datasets';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $start = now();
        $repository = app(JabatanFungsionalUmumRepository::class);
        $repository->deleteAll();
        $data = JabatanFungsionalUmumDataset::get();

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
