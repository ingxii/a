<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WorkController extends Controller
{
    public function getIndex()
    {
        return response("<b>getIndex</b>");
    }

    //
    public function anyTest()
    {
        return response("anyTest");
    }


    public function missingMethod($parameters = array())
    {
        //
        $parameters['action'] = 'missingMethod';


        return response()->json($parameters);
    }
}
