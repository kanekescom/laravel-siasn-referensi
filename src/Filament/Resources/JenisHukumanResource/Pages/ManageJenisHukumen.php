<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\JenisHukumanResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Support\Facades\Artisan;
use Kanekescom\Siasn\Referensi\Filament\Resources\JenisHukumanResource;
use Kanekescom\Siasn\Referensi\Filament\Traits\HasSubheadingWithLatestSync;

class ManageJenisHukumen extends ManageRecords
{
    use HasSubheadingWithLatestSync;

    protected static string $resource = JenisHukumanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('sync')
                ->requiresConfirmation()
                ->action(fn () => Artisan::call('siasn-referensi:pull jenis-hukuman')),
        ];
    }
}
