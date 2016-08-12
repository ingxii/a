<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TaskController extends Controller
{
    //
    public function index(Request $request)
    {
        //

        return response("")
            ->withCookie('name', 'value');
    }
    //
    public function test($id,$name)
    {
        //
        $data = array('id'=>$id, 'name'=>$name);

        return response()->json($data)
            ->withCookie('name', 'value');
    }

}
