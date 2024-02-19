<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\KelJabatanResource\Pages;

use Kanekescom\Siasn\Referensi\Filament\Resources\KelJabatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageKelJabatans extends ManageRecords
{
    protected static string $resource = KelJabatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
