<?php

namespace Kanekescom\Siasn\Referensi\Services;

use Kanekescom\Siasn\Referensi\Models\LatihanStruktural;
use Kanekescom\Siasn\Referensi\Support\PullService;

class PullLatihanStrukturalService
{
    public function __construct()
    {
        //
    }

    public static function execute(): void
    {
        (new PullService(LatihanStruktural::class))->execute();
    }
}
