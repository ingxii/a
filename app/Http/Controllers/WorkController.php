<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WorkController extends Controller
{
    public function getIndex()
    {
        echo 1;
    }

    //
    public function anyTest()
    {
        echo 2;
    }


    public function missingMethod($parameters = array())
    {
        //
        $parameters['action'] = 'missingMethod';


        return response()->json($parameters);
    }
}
