<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\RefDokumenResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Support\Facades\Artisan;
use Kanekescom\Siasn\Referensi\Filament\Resources\RefDokumenResource;
use Kanekescom\Siasn\Referensi\Filament\Traits\HasSubheadingWithLatestSync;

class ManageRefDokumens extends ManageRecords
{
    use HasSubheadingWithLatestSync;

    protected static string $resource = RefDokumenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('sync')
                ->requiresConfirmation()
                ->action(fn () => Artisan::call('siasn-referensi:pull ref-dokumen')),
        ];
    }
}
