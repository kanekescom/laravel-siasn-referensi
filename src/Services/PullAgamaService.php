<?php

namespace Kanekescom\Siasn\Referensi\Services;

use Kanekescom\Siasn\Referensi\Models\Agama;
use Kanekescom\Siasn\Referensi\Support\PullService;

class PullAgamaService
{
    public function __construct()
    {
        //
    }

    public static function execute(): void
    {
        (new PullService(Agama::class))->execute();
    }
}
