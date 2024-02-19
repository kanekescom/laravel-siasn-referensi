<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\RefDokumenResource\Pages;

use Kanekescom\Siasn\Referensi\Filament\Resources\RefDokumenResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageRefDokumens extends ManageRecords
{
    protected static string $resource = RefDokumenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
