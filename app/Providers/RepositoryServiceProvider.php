<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\PostRepository::class, \App\Repositories\PostRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\UserRepository::class, \App\Repositories\UserRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CategorieRepository::class, \App\Repositories\CategorieRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ProductsRepository::class, \App\Repositories\ProductsRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ControlImportRepository::class, \App\Repositories\ControlImportRepositoryEloquent::class);


        //:end-bindings:
    }

}
