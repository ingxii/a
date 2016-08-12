<?php

namespace App\Contracts;


// 规定了Test必须有的方法
interface TestContract
{
    public function callMe($param);
    public function fuck();
}