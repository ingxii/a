<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class MyFooFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        //这里返回的是ServiceProvider中注册时,定义的字符串
        return 'myfoo';
    }

}