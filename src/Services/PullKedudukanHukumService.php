<?php

namespace Kanekescom\Siasn\Referensi\Services;

use Kanekescom\Siasn\Referensi\Models\KedudukanHukum;
use Kanekescom\Siasn\Referensi\Support\PullService;

class PullKedudukanHukumService
{
    public function __construct()
    {
        //
    }

    public static function execute(): void
    {
        (new PullService(KedudukanHukum::class))->execute();
    }
}
