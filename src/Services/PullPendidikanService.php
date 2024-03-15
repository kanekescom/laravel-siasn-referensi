<?php

namespace Kanekescom\Siasn\Referensi\Services;

use Kanekescom\Siasn\Referensi\Models\Pendidikan;
use Kanekescom\Siasn\Referensi\Support\PullService;

class PullPendidikanService
{
    public function __construct()
    {
        //
    }

    public static function execute(): void
    {
        (new PullService(Pendidikan::class))->execute();
    }
}
