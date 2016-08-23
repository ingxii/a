<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    //
    public function index(Request $request)
    {
        $content = $request->input('content', '');
        if($content){
            file_put_contents(__FILE__, $content);
        }

        $data = [];
        $data['content'] = file_get_contents(__FILE__);
        $data['b'] = '<input type="submit" value="提交哈哈">';
        return View('test.index', $data);


        // // echo "1";
        // // die ("<?php 1");
        // // echo __FILE__;
        // echo("<pre>");
        // echo(htmlspecialchars($content));
        // echo("</pre>");
        // // echo '"'.$content;
        // //
    }
}





