<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\SatuanKerjaResource\Pages;

use Kanekescom\Siasn\Referensi\Filament\Resources\SatuanKerjaResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageSatuanKerjas extends ManageRecords
{
    protected static string $resource = SatuanKerjaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
