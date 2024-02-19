<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\JabatanFungsionalResource\Pages;

use Kanekescom\Siasn\Referensi\Filament\Resources\JabatanFungsionalResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageJabatanFungsionals extends ManageRecords
{
    protected static string $resource = JabatanFungsionalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
