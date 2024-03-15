<?php

namespace Kanekescom\Siasn\Referensi\Services;

use Kanekescom\Siasn\Referensi\Models\Instansi;
use Kanekescom\Siasn\Referensi\Support\PullService;

class PullInstansiService
{
    public function __construct()
    {
        //
    }

    public static function execute(): void
    {
        (new PullService(Instansi::class))->execute();
    }
}
