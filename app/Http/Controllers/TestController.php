<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    //
    public function index(Request $request)
    {
        // $content = $request->input('content', '');
        // if($content){
        //     file_put_contents(__FILE__, $content);
        // }
        echo isset($_GET['a'])?$_GET['a']:'';
        echo isset($_POST['a'])?$_POST['a']:'';

        $data = [];
        $data['content'] = file_get_contents(__FILE__);
        $data['b'] = '';
        return View('test.index', $data);


    }
}









