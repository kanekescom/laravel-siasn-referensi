<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\JenisHukumanResource\Pages;

use Kanekescom\Siasn\Referensi\Filament\Resources\JenisHukumanResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageJenisHukumen extends ManageRecords
{
    protected static string $resource = JenisHukumanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
