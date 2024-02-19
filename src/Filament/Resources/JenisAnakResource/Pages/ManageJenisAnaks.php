<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\JenisAnakResource\Pages;

use Kanekescom\Siasn\Referensi\Filament\Resources\JenisAnakResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageJenisAnaks extends ManageRecords
{
    protected static string $resource = JenisAnakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
