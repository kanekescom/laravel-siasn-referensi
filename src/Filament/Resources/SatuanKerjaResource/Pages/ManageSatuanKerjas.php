<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\SatuanKerjaResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Support\Facades\Artisan;
use Kanekescom\Siasn\Referensi\Filament\Resources\SatuanKerjaResource;

class ManageSatuanKerjas extends ManageRecords
{
    protected static string $resource = SatuanKerjaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('sync')
                ->requiresConfirmation()
                ->action(fn () => Artisan::call('siasn-referensi:pull satuan-kerja')),
        ];
    }
}
