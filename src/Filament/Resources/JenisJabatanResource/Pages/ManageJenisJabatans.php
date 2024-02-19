<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\JenisJabatanResource\Pages;

use Kanekescom\Siasn\Referensi\Filament\Resources\JenisJabatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageJenisJabatans extends ManageRecords
{
    protected static string $resource = JenisJabatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
