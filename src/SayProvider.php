<?php

namespace Jywang\Say;

use Illuminate\Support\ServiceProvider;

class SayProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/say.php' => config_path('say.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('say', function ($app) {
            return new Say($app['config']);
        });
    }

}
