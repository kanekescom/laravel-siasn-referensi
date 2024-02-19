<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\KanregResource\Pages;

use Kanekescom\Siasn\Referensi\Filament\Resources\KanregResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageKanregs extends ManageRecords
{
    protected static string $resource = KanregResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
