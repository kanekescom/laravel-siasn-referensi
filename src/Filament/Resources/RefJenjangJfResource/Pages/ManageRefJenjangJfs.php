<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\RefJenjangJfResource\Pages;

use Kanekescom\Siasn\Referensi\Filament\Resources\RefJenjangJfResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageRefJenjangJfs extends ManageRecords
{
    protected static string $resource = RefJenjangJfResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
