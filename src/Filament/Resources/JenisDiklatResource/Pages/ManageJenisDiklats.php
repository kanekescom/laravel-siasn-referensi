<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\JenisDiklatResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Support\Facades\Artisan;
use Kanekescom\Siasn\Referensi\Filament\Resources\JenisDiklatResource;
use Kanekescom\Siasn\Referensi\Filament\Traits\HasSubheadingWithLatestSync;

class ManageJenisDiklats extends ManageRecords
{
    use HasSubheadingWithLatestSync;

    protected static string $resource = JenisDiklatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('sync')
                ->requiresConfirmation()
                ->action(fn () => Artisan::call('siasn-referensi:pull jenis-diklat')),
        ];
    }
}
