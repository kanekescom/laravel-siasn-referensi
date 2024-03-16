<?php

namespace Kanekescom\Siasn\Referensi\Services;

use Kanekescom\Siasn\Referensi\Models\JenisJabatan;
use Kanekescom\Siasn\Referensi\Support\PullService;

class PullJenisJabatanService
{
    public function __construct()
    {
        //
    }

    public static function execute(): void
    {
        (new PullService(JenisJabatan::class))->execute();
    }
}
