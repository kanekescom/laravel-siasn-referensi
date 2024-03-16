<?php

namespace Kanekescom\Siasn\Referensi\Services;

use Kanekescom\Siasn\Referensi\Models\JabatanFungsionalUmum;
use Kanekescom\Siasn\Referensi\Support\PullService;

class PullJabatanFungsionalUmumService
{
    public function __construct()
    {
        //
    }

    public static function execute(): void
    {
        (new PullService(JabatanFungsionalUmum::class))->execute();
    }
}
