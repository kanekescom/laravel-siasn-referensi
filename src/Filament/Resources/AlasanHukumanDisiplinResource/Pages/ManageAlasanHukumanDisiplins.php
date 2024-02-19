<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\AlasanHukumanDisiplinResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Support\Facades\Artisan;
use Kanekescom\Siasn\Referensi\Filament\Resources\AlasanHukumanDisiplinResource;

class ManageAlasanHukumanDisiplins extends ManageRecords
{
    protected static string $resource = AlasanHukumanDisiplinResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('sync')
                ->requiresConfirmation()
                ->action(fn () => Artisan::call('siasn-referensi:pull alasan-hukuman-disiplin')),
        ];
    }
}
