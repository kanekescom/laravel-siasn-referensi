<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\LatihanStrukturalResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Kanekescom\Siasn\Referensi\Filament\Resources\LatihanStrukturalResource;
use Kanekescom\Siasn\Referensi\Filament\Traits\HasSubheadingWithLatestSync;

class ManageLatihanStrukturals extends ManageRecords
{
    use HasSubheadingWithLatestSync;

    protected static string $resource = LatihanStrukturalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('sync')
                ->requiresConfirmation()
                ->action(function ($livewire) {
                    try {
                        Artisan::call('siasn-referensi:pull latihan-struktural');

                        Notification::make()
                            ->title('Pulled successfully')
                            ->success()
                            ->send();
                    } catch (\Throwable $e) {
                        Notification::make()
                            ->title('Something went wrong')
                            ->danger()
                            ->body($e->getMessage())
                            ->send();

                        Log::error($e->getMessage());
                    }
                }),
        ];
    }
}
