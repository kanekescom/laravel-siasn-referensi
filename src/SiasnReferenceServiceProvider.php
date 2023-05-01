<?php

namespace Kanekes\SiasnReference;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Kanekes\SiasnReference\Commands\SiasnReferenceCommand;

class SiasnReferenceServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-siasn-reference')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-siasn-reference_table')
            ->hasCommand(SiasnReferenceCommand::class);
    }
}
