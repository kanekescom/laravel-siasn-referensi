<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\JabatanFungsionalResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Support\Facades\Log;
use Kanekescom\Siasn\Referensi\Filament\Resources\JabatanFungsionalResource;
use Kanekescom\Siasn\Referensi\Filament\Traits\HasSubheadingWithLatestSync;
use Kanekescom\Siasn\Referensi\Jobs\PullJabatanFungsionalJob;

class ManageJabatanFungsionals extends ManageRecords
{
    use HasSubheadingWithLatestSync;

    protected static string $resource = JabatanFungsionalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('sync')
                ->requiresConfirmation()
                ->action(function () {
                    try {
                        dispatch(new PullJabatanFungsionalJob(auth()->user()));

                        if (config('queue.default') != 'sync') {
                            Notification::make()
                                ->title('Sync data in the background')
                                ->success()
                                ->send();
                        }
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
