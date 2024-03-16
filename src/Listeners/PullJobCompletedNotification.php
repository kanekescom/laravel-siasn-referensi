<?php

namespace Kanekescom\Siasn\Referensi\Listeners;

use Filament\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Kanekescom\Siasn\Referensi\Events\PullDataCompleted;

class PullJobCompletedNotification implements ShouldQueue
{
    use InteractsWithQueue;

    public function __construct()
    {
        //
    }

    public function handle(PullDataCompleted $event): void
    {
        if ($event->user) {
            Notification::make()
                ->title("The [{$event->pullJob}] data sync has been completed")
                ->success()
                ->sendToDatabase($event->user);
        }
    }
}
