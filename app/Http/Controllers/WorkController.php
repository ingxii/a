<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Jobs\TestJob;


class WorkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function getIndex()
    {
        return response()->view('work', ['name'=>'aaaaaaa']);
    }

    public function postIndex()
    {

        $data = [];
        $data['msg'] = 'hello';
        $data['name'] = rand();
        $data['_'] = rand();
        // $this->dispatch(new TestJob());
        return response()->view('work', $data);
    }

    public function missingMethod($parameters = array())
    {
        //
        $parameters['_'] = 'missingMethod';


        return response()->json($parameters);
    }
}
