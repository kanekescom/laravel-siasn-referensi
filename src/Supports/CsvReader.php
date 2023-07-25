<?php

namespace Kanekescom\SiasnReferensi\Supports;

use Illuminate\Support\Collection;
use League\Csv\Reader;
use League\Csv\Statement;

class CsvReader
{
    /**
     * Read CSV file.
     *
     * @param string $filePath
     */
    public static function read(string $filePath): Collection
    {
        $reader = Reader::createFromPath($filePath);
        $reader->setDelimiter(';');
        $reader->setHeaderOffset(0);

        return collect(
            Statement::create()
                ->process($reader)
                ->getRecords()
        );
    }
}
