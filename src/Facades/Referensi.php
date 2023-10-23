<?php

namespace Kanekescom\Siasn\Referensi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kanekescom\Siasn\Referensi\Referensi
 */
class Referensi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Kanekescom\Siasn\Referensi\Referensi::class;
    }
}
