<?php

namespace Kanekescom\Siasn\Referensi\Services;

use Kanekescom\Siasn\Referensi\Models\AsnJenjangJabatan;
use Kanekescom\Siasn\Referensi\Support\PullService;

class PullAsnJenjangJabatanService
{
    public function __construct()
    {
        //
    }

    public static function execute(): void
    {
        (new PullService(AsnJenjangJabatan::class))->execute();
    }
}
