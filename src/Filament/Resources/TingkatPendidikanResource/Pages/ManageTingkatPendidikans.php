<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\TingkatPendidikanResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Support\Facades\Artisan;
use Kanekescom\Siasn\Referensi\Filament\Resources\TingkatPendidikanResource;

class ManageTingkatPendidikans extends ManageRecords
{
    protected static string $resource = TingkatPendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('sync')
                ->requiresConfirmation()
                ->action(fn () => Artisan::call('siasn-referensi:pull tingkat-pendidikan')),
        ];
    }
}
