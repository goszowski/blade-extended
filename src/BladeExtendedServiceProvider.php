<?php

namespace Goszowski\BladeExtended;

use Illuminate\Support\ServiceProvider;

class BladeExtendedServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {


    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        BladeExtended::register();
        // $this->app['blade-extended'] = $this->app->share(function ($app) {
        //   return new BladeExtended;
        // });
    }
}
