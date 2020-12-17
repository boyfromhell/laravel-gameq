<?php

namespace IchBin\GameQ;

use Illuminate\Support\ServiceProvider;

class LaravelGameQServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
       //
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Register the main class to use with the facade
        $this->app->singleton('gameq', function () {
            return new LaravelGameQ();
        });
    }
}
