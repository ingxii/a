<?php

namespace App\Contracts;

// use App\Contracts\TestContract;

class TestCool implements TestContract
{
    public function callMe($param)
    {
        return "({$param})";
    }

    public function fuck()
    {
        dd("--#");
    }
}
