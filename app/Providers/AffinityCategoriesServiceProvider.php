<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\AffinityCategoriesService;

class AffinityCategoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services. 
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\AffinityCategoriesService');    
        $this->app->bind('App\Repository\AffinityCategoriesRepositoryInterface','App\Repository\AffinityCategoriesRepository');
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
