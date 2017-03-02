<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Products\ProductsInterface',
            'App\Repositories\Products\ProductsRepository'
        );

        // $this->app->bind(
        //     'App\Repositories\Category\CategoryInterface',
        //     'App\Repositories\Category\CategoryRepository'
        // );
    }
}
