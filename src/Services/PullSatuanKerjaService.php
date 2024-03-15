<?php

namespace Kanekescom\Siasn\Referensi\Services;

use Kanekescom\Siasn\Referensi\Models\SatuanKerja;
use Kanekescom\Siasn\Referensi\Support\PullService;

class PullSatuanKerjaService
{
    public function __construct()
    {
        //
    }

    public static function execute(): void
    {
        (new PullService(SatuanKerja::class))->execute();
    }
}
