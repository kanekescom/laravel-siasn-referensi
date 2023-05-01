<?php

namespace Kanekes\SiasnReference\Commands;

use Illuminate\Console\Command;

class SiasnReferenceCommand extends Command
{
    public $signature = 'laravel-siasn-reference';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
