<?php

namespace Kanekescom\Siasn\Referensi\Services;

use Kanekescom\Siasn\Referensi\Models\JenisAnak;
use Kanekescom\Siasn\Referensi\Support\PullService;

class PullJenisAnakService
{
    public function __construct()
    {
        //
    }

    public static function execute(): void
    {
        (new PullService(JenisAnak::class))->execute();
    }
}
