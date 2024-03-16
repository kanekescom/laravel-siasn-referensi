<?php

namespace Kanekescom\Siasn\Referensi\Services;

use Kanekescom\Siasn\Referensi\Models\JenisDiklat;
use Kanekescom\Siasn\Referensi\Support\PullService;

class PullJenisDiklatService
{
    public function __construct()
    {
        //
    }

    public static function execute(): void
    {
        (new PullService(JenisDiklat::class))->execute();
    }
}
