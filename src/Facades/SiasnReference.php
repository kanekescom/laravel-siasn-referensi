<?php

namespace Kanekes\SiasnReference\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kanekes\SiasnReference\SiasnReference
 */
class SiasnReference extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Kanekes\SiasnReference\SiasnReference::class;
    }
}
