<?php

namespace Kanekescom\Siasn\Referensi\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PullDataCompleted
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(public string $pullJob, public ?object $user = null)
    {
        //
    }
}
