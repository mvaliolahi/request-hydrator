<?php

namespace Mvaliolahi\RequestHydrator;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider as SupportServiceProvider;
use Mvaliolahi\Hydrate\Hydrate;

/**
 * Package Service Provider.
 */
class ServiceProvider extends SupportServiceProvider
{
    /**
     * Register Services to Service Container
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Boot
     *
     * @return void
     */
    public function boot()
    {
        Request::macro('castTo', function ($class, $overwrite = []) {           
            return (new Hydrate)->to(new $class, $this->all(), $overwrite);
        });

        Request::macro('hydrateTo', function ($class, $overwrite = []) {
            return (new Hydrate)->to(new $class, $this->all(), $overwrite);
        });
    }
}
