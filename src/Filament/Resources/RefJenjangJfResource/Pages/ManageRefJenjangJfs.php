<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\RefJenjangJfResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Support\Facades\Artisan;
use Kanekescom\Siasn\Referensi\Filament\Resources\RefJenjangJfResource;

class ManageRefJenjangJfs extends ManageRecords
{
    protected static string $resource = RefJenjangJfResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('sync')
                ->requiresConfirmation()
                ->action(fn () => Artisan::call('siasn-referensi:pull ref-jenjang-jf')),
        ];
    }
}
