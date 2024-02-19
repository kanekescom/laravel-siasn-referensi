<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\AsnJenisJabatanResource\Pages;

use Kanekescom\Siasn\Referensi\Filament\Resources\AsnJenisJabatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageAsnJenisJabatans extends ManageRecords
{
    protected static string $resource = AsnJenisJabatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
