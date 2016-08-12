<?php

namespace App\Facades\Foo;

class MyFoo
{

    public static function add($a, $b)
    {
        return $a+$b;
    }

    public function nonstatic()
    {
        return 'hahaha';
    }
}