<?php

namespace Kanekescom\SiasnReferensi;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class SiasnReferensiServiceProvider extends ServiceProvider
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
        $this->mergeConfigFrom(__DIR__ . '/../config/siasn-referensi.php', 'siasn-referensi');

        // Register the service the package provides.
        $this->app->singleton('siasn-referensi', function ($app) {
            return new SiasnReferensi;
        });

        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\AgamaRepository::class, \Kanekescom\SiasnReferensi\Repositories\AgamaRepositoryEloquent::class);
        $this->app->bind(\Kanekescom\SiasnReferensi\Repositories\UnorRepository::class, \Kanekescom\SiasnReferensi\Repositories\UnorRepositoryEloquent::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['kanekescomSiasnReferensi'];
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
            __DIR__ . '/../config/siasn-referensi.php' => config_path('siasn-referensi.php'),
        ], 'siasn-referensi.config');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_agama_tables.php.stub' => $this->getMigrationFileName('create_siasn_referensi_agama_tables.php'),
        ], 'siasn_referensi_agama-migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_siasn_referensi_unor_tables.php.stub' => $this->getMigrationFileName('create_siasn_referensi_unor_tables.php'),
        ], 'siasn_referensi_unor-migrations');
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

        $this->commands([
            Commands\AgamaImport::class,
            Commands\UnorImport::class,
        ]);
    }

    /**
     * Returns existing migration file if found, else uses the current timestamp.
     */
    protected function getMigrationFileName(string $migrationFileName): string
    {
        $timestamp = date('Y_m_d_His');

        return Collection::make([$this->app->databasePath() . DIRECTORY_SEPARATOR . 'migrations' . DIRECTORY_SEPARATOR])
            ->flatMap(function ($path) use ($migrationFileName) {
                $filesystem = $this->app->make(Filesystem::class);

                return $filesystem->glob($path . '*_' . $migrationFileName);
            })
            ->push($this->app->databasePath() . "/migrations/{$timestamp}_{$migrationFileName}")
            ->first();
    }
}
