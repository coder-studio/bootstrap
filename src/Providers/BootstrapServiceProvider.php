<?php

namespace CoderStudio\Bootstrap\Providers;

use CoderStudio\Bootstrap\Bootstrap;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class BootstrapServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views/', 'bootstrap');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('bootstrap', function()
        {
            return new Bootstrap;
        });
    }
}
