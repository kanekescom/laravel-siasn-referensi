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
        'jabatan-fungsional-umum' => 'siasn-import:jabatan-fungsional-umum-ref',
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
