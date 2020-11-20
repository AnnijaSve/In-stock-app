<?php
namespace Facades\App\Clients;

use Illuminate\Support\Facades\Facade;
/**
 * @see \App\Clients\ClientFactory
 */

class ClientFactory extends Facade
{
    /**
     * get the registered name of the component.
     * @return string
     */

    protected static function getFacadeAccessor()
    {
        return 'App\Clients\ClientFactory';
    }
}

