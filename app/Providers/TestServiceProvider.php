<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// use App\Helpers\MyFooFacade as MyFooFacade;
use App\Facades\Foo\MyFoo; //要服务的Container
use App\Contracts\TestCool;

class TestServiceProvider extends ServiceProvider
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

        //使用singleton绑定单例
        $this->app->singleton("myfoo", function(){
            return new MyFoo();
        });



        // $test = \App::make('test');
        // echo $test->callMe('T');

        // $this->app->singleton('test',function(){
        //     return new TestCool();
        // });

        // 接口绑定到实现
        $this->app->bind('App\Contracts\TestContract',function(){
            return new TestCool();
        });


    }
}


