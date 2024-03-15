<?php

namespace Kanekescom\Siasn\Referensi\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Kanekescom\Siasn\Referensi\Services\PullKanregService;

class PullKanregJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct()
    {
        $this->onQueue('processing');
    }

    public function handle(): void
    {
        PullKanregService::execute();
    }
}
