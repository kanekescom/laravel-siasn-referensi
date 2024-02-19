<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\JenisJabatanResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Support\Facades\Artisan;
use Kanekescom\Siasn\Referensi\Filament\Resources\JenisJabatanResource;

class ManageJenisJabatans extends ManageRecords
{
    protected static string $resource = JenisJabatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('sync')
                ->requiresConfirmation()
                ->action(fn () => Artisan::call('siasn-referensi:pull jenis-jabatan')),
        ];
    }
}
