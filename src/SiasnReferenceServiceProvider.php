<?php

namespace Kanekescom\SiasnReference;

use Illuminate\Support\ServiceProvider;

class SiasnReferenceServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->offerPublishing();

        $this->registerCommands();
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/siasn-reference.php', 'siasn-reference');

        // Register the service the package provides.
        $this->app->singleton('siasn-reference', function ($app) {
            return new SiasnReference;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['Kanekescom\SiasnReference'];
    }

    /**
     * Offer publishing.
     *
     * @return void
     */
    protected function offerPublishing(): void
    {
        if (!$this->app->runningInConsole()) {
            return;
        }

        if (!function_exists('config_path')) {
            // function not available and 'publish' not relevant in Lumen
            return;
        }

        $this->publishes([
            __DIR__ . '/../config/siasn-reference.php' => config_path('siasn-reference.php'),
        ], 'siasn-reference.config');
    }

    /**
     * Register commands.
     *
     * @return void
     */
    protected function registerCommands(): void
    {
        if (!$this->app->runningInConsole()) {
            return;
        }

        $this->commands([]);
    }
}
