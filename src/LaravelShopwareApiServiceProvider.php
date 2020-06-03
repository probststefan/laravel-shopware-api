<?php

namespace Probststefan\LaravelShopwareApi;

use Illuminate\Support\ServiceProvider;

class LaravelShopwareApiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravel-shopware-api.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-shopware-api');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-shopware-api', function () {
            return new LaravelShopwareApi;
        });
    }
}
