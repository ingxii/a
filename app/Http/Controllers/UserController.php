<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Auth;

class UserController extends Controller
{
    protected $param;

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['test']]);

        $this->param = ['name' => '', 'error' => ''];

    }

    public function index(Request $request)
    {
        $cookie = $request->cookie();
        dump($cookie);

        $session = $request->session();
        dump($session->all());

        dump($request->user());

        // echo $request->ajax();

        return response()->json($request->user()->id);
    }

    public function test(Request $request)
    {

        return View('user.test', $this->param);
    }

}
