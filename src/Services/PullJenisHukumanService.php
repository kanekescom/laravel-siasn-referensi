<?php

namespace Kanekescom\Siasn\Referensi\Services;

use Kanekescom\Siasn\Referensi\Models\JenisHukuman;
use Kanekescom\Siasn\Referensi\Support\PullService;

class PullJenisHukumanService
{
    public function __construct()
    {
        //
    }

    public static function execute(): void
    {
        (new PullService(JenisHukuman::class))->execute();
    }
}
