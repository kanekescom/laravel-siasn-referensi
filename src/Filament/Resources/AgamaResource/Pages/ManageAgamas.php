<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\AgamaResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Support\Facades\Artisan;
use Kanekescom\Siasn\Referensi\Filament\Resources\AgamaResource;
use Kanekescom\Siasn\Referensi\Filament\Traits\HasSubheadingWithLatestSync;

class ManageAgamas extends ManageRecords
{
    use HasSubheadingWithLatestSync;

    protected static string $resource = AgamaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('sync')
                ->requiresConfirmation()
                ->action(fn () => Artisan::call('siasn-referensi:pull agama')),
        ];
    }
}
