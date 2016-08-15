<?php

namespace App\Contracts;

// use App\Contracts\TestContract;

class TestCool implements TestContract
{
    private $left="(";
    private $right=")";
    public function callMe($param)
    {
        $this->left.="(";
        $this->right.=")";
        return "{$this->left}{$param}{$this->right}";
    }

    public function fuck()
    {
        dd("--#");
    }
}
