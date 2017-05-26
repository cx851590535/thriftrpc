<?php

namespace PhpRpc;

use Illuminate\Support\Facades\Facade;

class PhpRpcFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'phprpc.server';
    }
}
