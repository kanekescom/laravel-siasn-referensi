<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\PendidikanResource\Pages;

use Kanekescom\Siasn\Referensi\Filament\Resources\PendidikanResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePendidikans extends ManageRecords
{
    protected static string $resource = PendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
