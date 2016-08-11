<?php

namespace App\Http\Controllers;

use App\Facades\MyFooFacade;
use Illuminate\Http\Request;
use Log;

class WorkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function getIndex()
    {
        return response()->view('work', ['name' => 'aaaaaaa']);
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

    public function getLog(Request $request)
    {
        Log::emergency("系统挂掉了", ['1', '2']);

        Log::alert("数据库访问异常");
        Log::critical("系统出现未知错误");
        Log::error("指定变量不存在");
        Log::warning("该方法已经被废弃");
        Log::notice("用户在异地登录");
        Log::info("用户xxx登录成功");
        Log::debug("调试信息");
        echo MyFooFacade::add(4, 5);

    }

    public function missingMethod($parameters = array())
    {
        //
        $parameters['_'] = 'missingMethod';

        return response()->json($parameters);
    }
}
