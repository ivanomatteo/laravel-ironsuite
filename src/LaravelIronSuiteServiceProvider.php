<?php

namespace IvanoMatteo\LaravelIronSuite;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use IvanoMatteo\LaravelIronSuite\Commands\LaravelIronSuiteCommand;

class LaravelIronSuiteServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-ironsuite')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_ironsuite_table')
            ->hasCommand(LaravelIronSuiteCommand::class);
    }
}
