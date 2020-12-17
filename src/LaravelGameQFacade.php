<?php

namespace IchBin\GameQ;

use Illuminate\Support\Facades\Facade;


class LaravelGameQFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'gameq';
    }
}
