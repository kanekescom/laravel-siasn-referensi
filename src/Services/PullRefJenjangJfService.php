<?php

namespace Kanekescom\Siasn\Referensi\Services;

use Kanekescom\Siasn\Referensi\Models\RefJenjangJf;
use Kanekescom\Siasn\Referensi\Support\PullService;

class PullRefJenjangJfService
{
    public function __construct()
    {
        //
    }

    public static function execute(): void
    {
        (new PullService(RefJenjangJf::class))->execute();
    }
}
