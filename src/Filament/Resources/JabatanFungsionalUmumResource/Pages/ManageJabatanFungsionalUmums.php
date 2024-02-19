<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\JabatanFungsionalUmumResource\Pages;

use Kanekescom\Siasn\Referensi\Filament\Resources\JabatanFungsionalUmumResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageJabatanFungsionalUmums extends ManageRecords
{
    protected static string $resource = JabatanFungsionalUmumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
