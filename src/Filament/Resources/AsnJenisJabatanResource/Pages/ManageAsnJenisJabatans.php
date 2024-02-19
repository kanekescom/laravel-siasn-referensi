<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\AsnJenisJabatanResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Support\Facades\Artisan;
use Kanekescom\Siasn\Referensi\Filament\Resources\AsnJenisJabatanResource;
use Kanekescom\Siasn\Referensi\Filament\Traits\HasSubheadingWithLatestSync;

class ManageAsnJenisJabatans extends ManageRecords
{
    use HasSubheadingWithLatestSync;

    protected static string $resource = AsnJenisJabatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('sync')
                ->requiresConfirmation()
                ->action(fn () => Artisan::call('siasn-referensi:pull asn-jenis-jabatan')),
        ];
    }
}
