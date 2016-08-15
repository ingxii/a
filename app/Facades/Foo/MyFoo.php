<?php

namespace App\Facades\Foo;

class MyFoo
{
    private $step = '';

    public  function add($a, $b)
    {
        $this->step.=".";
        return $this->step . ($a + $b);
    }

    public function nonstatic()
    {
        return 'hahaha';
    }
}
