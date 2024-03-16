<?php

namespace Kanekescom\Siasn\Referensi\Services;

use Kanekescom\Siasn\Referensi\Models\TingkatPendidikan;
use Kanekescom\Siasn\Referensi\Support\PullService;

class PullTingkatPendidikanService
{
    public function __construct()
    {
        //
    }

    public static function execute(): void
    {
        (new PullService(TingkatPendidikan::class))->execute();
    }
}
