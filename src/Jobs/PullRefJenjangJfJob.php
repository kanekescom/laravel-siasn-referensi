<?php

namespace Kanekescom\Siasn\Referensi\Jobs;

use Filament\Notifications\Notification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Kanekescom\Siasn\Referensi\Events\PullDataCompleted;
use Kanekescom\Siasn\Referensi\Services\PullRefJenjangJfService;

class PullRefJenjangJfJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(public $user = null)
    {
        $this->onQueue(config('siasn-referensi.queue'));
    }

    public function handle(): void
    {
        try {
            PullRefJenjangJfService::execute();

            event(new PullDataCompleted('RefJenjangJf', $this->user));
        } catch (\Throwable $e) {
            if ($this->user) {
                Notification::make()
                    ->title('Something went wrong')
                    ->danger()
                    ->body($e->getMessage())
                    ->sendToDatabase($this->user);
            }

            Log::error($e->getMessage());
        }
    }
}
