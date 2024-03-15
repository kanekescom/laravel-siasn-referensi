<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources\AlasanHukumanDisiplinResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Support\Facades\Log;
use Kanekescom\Siasn\Referensi\Filament\Resources\AlasanHukumanDisiplinResource;
use Kanekescom\Siasn\Referensi\Filament\Traits\HasSubheadingWithLatestSync;
use Kanekescom\Siasn\Referensi\Jobs\PullAlasanHukumanDisiplinJob;

class ManageAlasanHukumanDisiplins extends ManageRecords
{
    use HasSubheadingWithLatestSync;

    protected static string $resource = AlasanHukumanDisiplinResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('sync')
                ->requiresConfirmation()
                ->action(function () {
                    try {
                        PullAlasanHukumanDisiplinJob::dispatch()
                            ->afterResponse();

                        Notification::make()
                            ->title('Pulling a new data in background')
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
