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
         $this->registerBindings();
    }

    public function registerBindings()
    {

        $this->app->bind(
            \App\Repositories\Admin\Purpose\PurposeRepository::class,
            \App\Repositories\Admin\Purpose\EloquentPurposeRepository::class
        );
         $this->app->bind(
            \App\Repositories\Admin\PropertyType\PropertyTypeRepository::class,
            \App\Repositories\Admin\PropertyType\EloquentPropertyTypeRepository::class
        );
      
    }

}
