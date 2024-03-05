<?php

namespace Kanekescom\Siasn\Referensi\Enums;

use Filament\Support\Contracts\HasLabel;

enum JenisJabatanEnum: string implements HasLabel
{
    case JABATANSTRUKTURAL = '1';
    case JABATANFUNGSIONAL = '2';
    case JABATANPELAKSANA = '4';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::JABATANSTRUKTURAL => 'Jabatan Struktural',
            self::JABATANFUNGSIONAL => 'Jabatan Fungsional',
            self::JABATANPELAKSANA => 'Jebatan Pelaksana',
        };
    }
}
