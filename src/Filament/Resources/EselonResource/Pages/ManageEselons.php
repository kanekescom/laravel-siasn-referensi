<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\EselonResource\Pages;

use Kanekescom\Siasn\Referensi\Filament\Resources\EselonResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageEselons extends ManageRecords
{
    protected static string $resource = EselonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
