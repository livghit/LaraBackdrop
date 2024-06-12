<?php

namespace LivGhit\LaraBackdrop;

use LivGhit\LaraBackdrop\Commands\LaraBackdropCommand;
use LivGhit\LaraBackdrop\Components\Dotted;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasRoutes('larabackdrop')
            ->hasViews('LaraBackdrop')
            ->hasViewComponents('larabackdrop', Dotted::class)
            ->hasMigration('create_larabackdrop_table')
            ->hasCommand(LaraBackdropCommand::class);
    }
}
