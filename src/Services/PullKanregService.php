<?php

namespace Kanekescom\Siasn\Referensi\Services;

use Kanekescom\Siasn\Referensi\Models\Kanreg;
use Kanekescom\Siasn\Referensi\Support\PullService;

class PullKanregService
{
    public function __construct()
    {
        //
    }

    public static function execute(): void
    {
        (new PullService(Kanreg::class))->execute();
    }
}
