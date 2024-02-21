<?php

namespace Kanekescom\Siasn\Referensi\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Kanekescom\Siasn\Api\Referensi\Exceptions\BadEndpointCallException;
use Kanekescom\Siasn\Referensi\Facades\Referensi;

class PullCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-referensi:pull
                            {endpoint?* : Endpoint API}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Pull data to database from endpoint on SIASN Referensi API';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $endpointOptions = method_public(\Kanekescom\Siasn\Referensi\Referensi::class)->map(function ($method) {
            return str($method)
                ->kebab()
                ->replaceFirst('get-', '')->toString();
        })->mapWithKeys(function ($item) {
            return [$item => $item];
        });
        $endpoints = collect($this->argument('endpoint'));

        if (filled($endpoints->first()) && blank($endpoints = $endpointOptions->only($endpoints))) {
            throw new BadEndpointCallException('Endpoint does not exist.');
        }

        if (blank($endpoints->first())) {
            $endpoints = collect($this->choice(
                'What do you want to call endpoint? Separate with commas.',
                collect(['all' => 'all'])->merge($endpointOptions)->keys()->toArray(),
                0,
                null,
                true,
            ));

            if ($endpoints->contains('all')) {
                $endpoints = $endpointOptions;
            } else {
                $endpoints = $endpointOptions->only($endpoints);
            }
        }

        $start = now();
        $endpoints = $endpoints->keys();
        $endpointCount = $endpoints->count();
        $endpointErrors = collect([]);
        $i = 0;

        $endpoints->each(function ($endpoint) use ($endpointCount, &$endpointErrors, &$i) {
            $i++;
            $modelName = str($endpoint)->studly();
            $modelClass = $modelName->prepend('Kanekescom\Siasn\Referensi\Models\/');
            $model = new $modelClass;
            $referensiMethod = 'get'.$modelName;

            $this->info("[{$i}/{$endpointCount}] {$endpoint}");

            try {
                $response = Referensi::$referensiMethod();

                if ($response->count() == 0) {
                    $errorMessage = 'Data not found';
                    $endpointErrors->put($endpoint, $errorMessage);
                    $this->components->error($errorMessage);

                    return self::FAILURE;
                }
            } catch (\Exception $e) {
                $errorMessage = $e->getMessage();
                $endpointErrors->put($endpoint, $errorMessage);
                $this->components->error($errorMessage);

                return self::FAILURE;
            }

            try {
                $bar = $this->output->createProgressBar($response->count());
                $bar->start();

                DB::transaction(function () use ($model, $response, $bar) {
                    if (config('siasn-referensi.truncate_model_before_pull')) {
                        $model->query()->delete();
                    }

                    $response->chunk(config('siasn-referensi.chunk_data'))->each(function ($item) use ($model, $bar) {
                        $model->upsert($item->toArray(), 'id');
                        $model->query()
                            ->withTrashed()
                            ->whereIn('id', $item->pluck('id'))
                            ->restore();

                        $bar->advance($item->count());
                    });
                });

                $bar->finish();

                $this->newLine(2);
            } catch (\Exception $e) {
                $errorMessage = $e->getMessage();
                $endpointErrors->put($endpoint, $errorMessage);
                $this->components->error($errorMessage);

                return self::FAILURE;
            }
        });

        if ($endpointErrors) {
            $this->components->info("There is {$endpointErrors->count()} error(s):");

            $endpointErrors->each(function ($value, $key) {
                $this->line("<bg=red> {$key} </> {$value} ");
                $this->newLine();
            });
        }

        $this->comment("All tasks are processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
