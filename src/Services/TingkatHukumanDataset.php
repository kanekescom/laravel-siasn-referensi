<?php

namespace Kanekescom\SiasnReferensi\Services;

use Illuminate\Support\Collection;
use Kanekescom\SiasnReferensi\Contracts\Dataset;
use Kanekescom\SiasnReferensi\Supports\CsvReader;

class TingkatHukumanDataset implements Dataset
{
    /**
     * Get dataset.
     */
    public static function get(): Collection
    {
        return CsvReader::read(config('siasn-referensi.dataset_path') . '/csv/siasn_referensi_tingkat_hukuman.csv');
    }
}