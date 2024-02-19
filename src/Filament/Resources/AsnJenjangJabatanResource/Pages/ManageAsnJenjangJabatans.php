<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\AsnJenjangJabatanResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Support\Facades\Artisan;
use Kanekescom\Siasn\Referensi\Filament\Resources\AsnJenjangJabatanResource;
use Kanekescom\Siasn\Referensi\Filament\Traits\HasSubheadingWithLatestSync;

class ManageAsnJenjangJabatans extends ManageRecords
{
    use HasSubheadingWithLatestSync;

    protected static string $resource = AsnJenjangJabatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('sync')
                ->requiresConfirmation()
                ->action(fn () => Artisan::call('siasn-referensi:pull asn-jenjang-jabatan')),
        ];
    }
}
