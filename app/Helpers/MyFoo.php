<?php

namespace App\Helpers;

class MyFoo
{
    function __construct() {
        echo("<p>AAA</p>");
    }
    public static function add($a, $b)
    {
        return $a+$b;
    }
}