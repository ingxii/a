<?php

namespace App\Http\Controllers;

use App\Contracts\TestContract;
use App\Facades\Foo\MyFooFacade;
use Illuminate\Http\Request;
// use Auth;
use Illuminate\Support\Facades\Auth;

// use App;

class WorkController extends Controller
{
    protected $test;

    public function __construct(TestContract $test)
    {
        $this->middleware('auth');

        $this->test = $test;
    }

    public function getIndex()
    {
        return response()->view('work', ['name' => '']);
    }

    public function postIndex()
    {

        return response()->view('work', ['name' => rand(), 'msg' => 'hello']);
    }

    public function getLog(Request $request)
    {
        // Log::emergency("系统挂掉了", ['1', '2']);
        // Log::alert("数据库访问异常");
        // Log::critical("系统出现未知错误");
        // Log::error("指定变量不存在");
        // Log::warning("该方法已经被废弃");
        // Log::notice("用户在异地登录");
        // Log::info("用户xxx登录成功");
        // Log::debug("调试信息");

        // $this->dispatch(new TestJob(['a','b','c']));
        // $password = 1;
        // if (Auth::attempt(['mobile' => '13480233787', 'password' => $password])) {
        //     echo("<p>A</p>");
        // } else {
        //     echo("<p>B</p>");
        // }

        echo MyFooFacade::add(1, 2);
        echo $this->test->callMe('Q');
        echo MyFooFacade::add(1, 2);
        echo $this->test->callMe('Q');
        echo MyFooFacade::add(1, 2);
        echo $this->test->callMe('Q');

    }

    public function getTest(Request $request)
    {
        // $test = \App::make('test');
        // $test->callMe('getTest');
    }

    public function missingMethod($parameters = array())
    {
        //
        $parameters['_'] = 'missingMethod';

        return response()->json($parameters);
    }
}
