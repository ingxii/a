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

        return response()->view('user.index', $this->param)
            ->withCookie('name', 'value');
    }

    public function test(Request $request)
    {

        return View('user.test', $this->param);
    }

}
