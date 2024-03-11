<?php

namespace Kanekescom\Siasn\Referensi;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class SiasnReferensiPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        // config([
        //     'app.name' => config('siasn-referensi.name'),
        // ]);

        return $panel
            ->default()
            ->id('siasn-referensi')
            ->path(config('siasn-referensi.filament.path'))
            ->domain(config('siasn-referensi.filament.domain'))
            ->profile(isSimple: false)
            ->login()
            ->brandName(config('siasn-referensi.filament.brandName'))
            ->brandLogo(config('siasn-referensi.filament.brandLogo'))
            ->brandLogoHeight(config('siasn-referensi.filament.brandLogoHeight'))
            ->favicon(config('siasn-referensi.filament.favicon'))
            ->colors(config('siasn-referensi.filament.colors'))
            ->darkMode(config('siasn-referensi.filament.darkMode.enabled'))
            ->topbar(config('siasn-referensi.filament.topbar.enabled'))
            ->topNavigation(config('siasn-referensi.filament.topNavigation.enabled'))
            ->breadcrumbs(config('siasn-referensi.filament.breadcrumbs.enabled'))
            ->databaseNotifications(config('siasn-referensi.filament.databaseNotifications.enabled'))
            ->databaseNotificationsPolling(config('siasn-referensi.filament.databaseNotifications.polling'))
            ->spa(config('siasn-referensi.filament.spa.enabled'))
            ->unsavedChangesAlerts(config('siasn-referensi.filament.unsavedChangesAlerts.enabled'))
            ->databaseTransactions(config('siasn-referensi.filament.databaseTransactions.enabled'))
            ->sidebarCollapsibleOnDesktop(config('siasn-referensi.filament.sidebarCollapsibleOnDesktop.enabled'))
            ->sidebarFullyCollapsibleOnDesktop(config('siasn-referensi.filament.sidebarFullyCollapsibleOnDesktop.enabled'))
            ->navigation(config('siasn-referensi.filament.navigation.enabled'))
            ->collapsibleNavigationGroups(config('siasn-referensi.filament.collapsibleNavigationGroups.enabled'))
            ->navigationGroups(config('siasn-referensi.filament.navigationGroups'))
            ->discoverResources(in: __DIR__.'/Filament/Resources', for: 'Kanekescom\\Siasn\\Referensi\\Filament\\Resources')
            ->discoverPages(in: __DIR__.'/Filament/Pages', for: 'Kanekescom\\Siasn\\Referensi\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: __DIR__.'/Filament/Widgets', for: 'Kanekescom\\Siasn\\Referensi\\Filament\\Widgets')
            ->widgets([
                //
            ])
            ->plugins([
                \ShuvroRoy\FilamentSpatieLaravelBackup\FilamentSpatieLaravelBackupPlugin::make()
                    ->usingPage(\Kanekescom\Siasn\Referensi\Filament\Pages\Backups::class),
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
