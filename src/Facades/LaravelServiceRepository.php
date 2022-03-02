<?php

namespace Gaurang\LaravelServiceRepository\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Gaurang\LaravelServiceRepository\LaravelServiceRepository
 */
class LaravelServiceRepository extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-service-repository';
    }
}
