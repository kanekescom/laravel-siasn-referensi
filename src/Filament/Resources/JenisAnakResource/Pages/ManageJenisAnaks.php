<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\JenisAnakResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Support\Facades\Artisan;
use Kanekescom\Siasn\Referensi\Filament\Resources\JenisAnakResource;
use Kanekescom\Siasn\Referensi\Filament\Traits\HasSubheadingWithLatestSync;

class ManageJenisAnaks extends ManageRecords
{
    use HasSubheadingWithLatestSync;

    protected static string $resource = JenisAnakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('sync')
                ->requiresConfirmation()
                ->action(fn () => Artisan::call('siasn-referensi:pull jenis-anak')),
        ];
    }
}
