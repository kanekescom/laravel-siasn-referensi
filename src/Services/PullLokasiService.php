<?php

namespace Kanekescom\Siasn\Referensi\Services;

use Kanekescom\Siasn\Referensi\Models\Lokasi;
use Kanekescom\Siasn\Referensi\Support\PullService;

class PullLokasiService
{
    public function __construct()
    {
        //
    }

    public static function execute(): void
    {
        (new PullService(Lokasi::class))->execute();
    }
}
