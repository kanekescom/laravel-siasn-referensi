<?php

namespace Kanekescom\Siasn\Referensi\Services;

use Kanekescom\Siasn\Referensi\Models\Eselon;
use Kanekescom\Siasn\Referensi\Support\PullService;

class PullEselonService
{
    public function __construct()
    {
        //
    }

    public static function execute(): void
    {
        (new PullService(Eselon::class))->execute();
    }
}
