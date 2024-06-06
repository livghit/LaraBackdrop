<?php

namespace LivGhit\LaraBackdrop;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use LivGhit\LaraBackdrop\Commands\LaraBackdropCommand;

class LaraBackdropServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('larabackdrop')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_larabackdrop_table')
            ->hasCommand(LaraBackdropCommand::class);
    }
}
