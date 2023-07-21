<?php

namespace Kanekescom\SiasnReference\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Kanekescom\Siasn\Requests\Referensi\RefUnor;
use Kanekescom\SiasnReference\Models\Unor;
use Kanekescom\SiasnReference\Repositories\UnorRepository;
use Kanekescom\SiasnReference\Transformers\UnorTransformer;

class UnorImport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-import:unor';

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
        $request = (new RefUnor)->send()->collect();

        $data = collect($request->get('data'))->map(function ($item) {
            return UnorTransformer::transformFromApi($item);
        });

        $bar = $this->output->createProgressBar($data->count());
        $bar->start();

        DB::transaction(function () use ($data, $repository, $bar) {
            $data->chunk(1000)->each(function ($item) use ($repository, $bar) {
                $repository->upsert($item->toArray(), 'id');

                if (in_array('Illuminate\Database\Eloquent\SoftDeletes', class_uses($repository->model()))) {
                    $repository->restoreById($item->pluck('id'));
                }

                $bar->advance();
            });
        });

        $bar->finish();

        $this->newLine();
        $this->comment("Processed in {$start->diffInSeconds(now())} seconds");
    }
}
