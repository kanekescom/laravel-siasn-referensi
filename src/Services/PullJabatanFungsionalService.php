<?php

namespace Kanekescom\Siasn\Referensi\Services;

use Kanekescom\Siasn\Referensi\Models\JabatanFungsional;
use Kanekescom\Siasn\Referensi\Support\PullService;

class PullJabatanFungsionalService
{
    public function __construct()
    {
        //
    }

    public static function execute(): void
    {
        (new PullService(JabatanFungsional::class))->execute();
    }
}
