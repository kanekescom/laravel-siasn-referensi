<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\EselonResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Support\Facades\Artisan;
use Kanekescom\Siasn\Referensi\Filament\Resources\EselonResource;
use Kanekescom\Siasn\Referensi\Filament\Traits\HasSubheadingWithLatestSync;

class ManageEselons extends ManageRecords
{
    use HasSubheadingWithLatestSync;

    protected static string $resource = EselonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('sync')
                ->requiresConfirmation()
                ->action(fn () => Artisan::call('siasn-referensi:pull eselon')),
        ];
    }
}
