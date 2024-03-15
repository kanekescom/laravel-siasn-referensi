<?php

namespace Kanekescom\Siasn\Referensi\Services;

use Kanekescom\Siasn\Referensi\Models\KelJabatan;
use Kanekescom\Siasn\Referensi\Support\PullService;

class PullKelJabatanService
{
    public function __construct()
    {
        //
    }

    public static function execute(): void
    {
        (new PullService(KelJabatan::class))->execute();
    }
}
