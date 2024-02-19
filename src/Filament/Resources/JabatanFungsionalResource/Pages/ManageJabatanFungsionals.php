<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\JabatanFungsionalResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Support\Facades\Artisan;
use Kanekescom\Siasn\Referensi\Filament\Resources\JabatanFungsionalResource;
use Kanekescom\Siasn\Referensi\Filament\Traits\HasSubheadingWithLatestSync;

class ManageJabatanFungsionals extends ManageRecords
{
    use HasSubheadingWithLatestSync;

    protected static string $resource = JabatanFungsionalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('sync')
                ->requiresConfirmation()
                ->action(fn () => Artisan::call('siasn-referensi:pull jabatan-fungsional')),
        ];
    }
}
