<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\DemoOne;

class EnvatoCustomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\DemoOne', function ($app) {
            return new DemoOne();
          });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
