<?php

namespace Kanekescom\SiasnReferensi\Contracts;

use Illuminate\Support\Collection;

interface Dataset
{
    /**
     * Get dataset.
     */
    public static function get(): Collection;
}
