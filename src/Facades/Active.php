<?php

namespace Krgupta\Active\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Active facade class.
 *
 */
class Active extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'active';
    }

}
