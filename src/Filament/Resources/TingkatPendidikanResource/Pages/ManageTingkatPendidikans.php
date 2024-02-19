<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\TingkatPendidikanResource\Pages;

use Kanekescom\Siasn\Referensi\Filament\Resources\TingkatPendidikanResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTingkatPendidikans extends ManageRecords
{
    protected static string $resource = TingkatPendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
