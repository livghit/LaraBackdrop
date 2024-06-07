<?php

namespace Workbench\App\Providers;

use Illuminate\Support\ServiceProvider;
use LivGhit\LaraBackdrop\LaraBackdropServiceProvider;

class WorkbenchServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        LaraBackdropServiceProvider::class;
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
