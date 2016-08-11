<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// use App\Helpers\MyFooFacade as MyFooFacade;
use App\Helpers\MyFoo; //要服务的Container


class LocaleServiceProvider extends ServiceProvider
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
        //
        $this->app->bind("myfoo", function(){

            // return new MyFooFacade();
            return new MyFoo();
        });
    }
}
