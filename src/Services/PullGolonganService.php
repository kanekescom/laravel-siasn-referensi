<?php

namespace Kanekescom\Siasn\Referensi\Services;

use Kanekescom\Siasn\Referensi\Models\Golongan;
use Kanekescom\Siasn\Referensi\Support\PullService;

class PullGolonganService
{
    public function __construct()
    {
        //
    }

    public static function execute(): void
    {
        (new PullService(Golongan::class))->execute();
    }
}
