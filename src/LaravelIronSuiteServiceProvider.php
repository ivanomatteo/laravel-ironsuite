<?php

namespace IvanoMatteo\LaravelIronSuite;

use IvanoMatteo\LaravelIronSuite\Commands\LaravelIronSuiteCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
