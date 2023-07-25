<?php

namespace Kanekescom\SiasnReferensi\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Kanekescom\Siasn\Facades\Siasn;
use Kanekescom\SiasnReferensi\Repositories\UnorRepository;
use Kanekescom\SiasnReferensi\Transformers\UnorTransformer;

class UnorImport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-import:ref-unor';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import unor reference from SIASN API';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $start = now();
        $repository = app(UnorRepository::class);
        $repository->deleteAll();
        $request = Siasn::getRefUnor()->collect();

        $data = collect($request->get('data'))->map(function ($item) {
            return UnorTransformer::transformFromApi($item);
        });

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
