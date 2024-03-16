<?php

namespace Kanekescom\Siasn\Referensi\Services;

use Kanekescom\Siasn\Referensi\Models\AlasanHukumanDisiplin;
use Kanekescom\Siasn\Referensi\Support\PullService;

class PullAlasanHukumanDisiplinService
{
    public function __construct()
    {
        //
    }

    public static function execute(): void
    {
        (new PullService(AlasanHukumanDisiplin::class))->execute();
    }
}
