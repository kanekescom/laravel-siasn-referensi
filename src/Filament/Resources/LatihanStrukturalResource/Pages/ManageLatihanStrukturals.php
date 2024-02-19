<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\LatihanStrukturalResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Support\Facades\Artisan;
use Kanekescom\Siasn\Referensi\Filament\Resources\LatihanStrukturalResource;

class ManageLatihanStrukturals extends ManageRecords
{
    protected static string $resource = LatihanStrukturalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('sync')
                ->requiresConfirmation()
                ->action(fn () => Artisan::call('siasn-referensi:pull latihan-struktural')),
        ];
    }
}
