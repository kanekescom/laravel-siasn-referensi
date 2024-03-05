<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\KanregResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Kanekescom\Siasn\Referensi\Filament\Resources\KanregResource;
use Kanekescom\Siasn\Referensi\Filament\Traits\HasSubheadingWithLatestSync;

class ManageKanregs extends ManageRecords
{
    use HasSubheadingWithLatestSync;

    protected static string $resource = KanregResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('sync')
                ->requiresConfirmation()
                ->action(function ($livewire) {
                    try {
                        Artisan::call('siasn-referensi:pull kanreg');

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
