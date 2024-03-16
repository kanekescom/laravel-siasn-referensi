<?php

namespace Kanekescom\Siasn\Referensi\Services;

use Kanekescom\Siasn\Referensi\Models\RefDokumen;
use Kanekescom\Siasn\Referensi\Support\PullService;

class PullRefDokumenService
{
    public function __construct()
    {
        //
    }

    public static function execute(): void
    {
        (new PullService(RefDokumen::class))->execute();
    }
}
