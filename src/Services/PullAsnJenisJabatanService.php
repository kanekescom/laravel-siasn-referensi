<?php

namespace Kanekescom\Siasn\Referensi\Services;

use Kanekescom\Siasn\Referensi\Models\AsnJenisJabatan;
use Kanekescom\Siasn\Referensi\Support\PullService;

class PullAsnJenisJabatanService
{
    public function __construct()
    {
        //
    }

    public static function execute(): void
    {
        (new PullService(AsnJenisJabatan::class))->execute();
    }
}
