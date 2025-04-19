<?php

namespace IvanoMatteo\LaravelIronSuite\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \IvanoMatteo\LaravelIronSuite\LaravelIronSuite
 */
class LaravelIronSuite extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \IvanoMatteo\LaravelIronSuite\LaravelIronSuite::class;
    }
}
