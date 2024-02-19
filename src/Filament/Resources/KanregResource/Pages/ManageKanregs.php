<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\KanregResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Support\Facades\Artisan;
use Kanekescom\Siasn\Referensi\Filament\Resources\KanregResource;

class ManageKanregs extends ManageRecords
{
    protected static string $resource = KanregResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('sync')
                ->requiresConfirmation()
                ->action(fn () => Artisan::call('siasn-referensi:pull kanreg')),
        ];
    }
}
