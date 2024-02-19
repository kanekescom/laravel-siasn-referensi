<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\PendidikanResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Support\Facades\Artisan;
use Kanekescom\Siasn\Referensi\Filament\Resources\PendidikanResource;
use Kanekescom\Siasn\Referensi\Filament\Traits\HasSubheadingWithLatestSync;

class ManagePendidikans extends ManageRecords
{
    use HasSubheadingWithLatestSync;

    protected static string $resource = PendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('sync')
                ->requiresConfirmation()
                ->action(fn () => Artisan::call('siasn-referensi:pull pendidikan')),
        ];
    }
}
