<?php

namespace LivGhit\LaraBackdrop\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LivGhit\LaraBackdrop\LaraBackdrop
 */
class LaraBackdrop extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \LivGhit\LaraBackdrop\LaraBackdrop::class;
    }
}
