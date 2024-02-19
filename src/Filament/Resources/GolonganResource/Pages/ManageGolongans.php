<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\GolonganResource\Pages;

use Kanekescom\Siasn\Referensi\Filament\Resources\GolonganResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageGolongans extends ManageRecords
{
    protected static string $resource = GolonganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
