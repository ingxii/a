<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // abort(404);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type='a',$page='0')
    {
        $header['a'] = '用户管理';
        $header['b'] = '业务管理';
        $header['c'] = '信息中心';
        $header['d'] = '系统管理';

        $box_title['a']["0"] = "首页";
        $box_title['a']["1"] = "会员列表";
        $box_title['a']["2"] = "店铺列表";
        $box_title['a']["3"] = "合伙人列表";
        $box_title['a']["4"] = "店铺申请";
        $box_title['a']["5"] = "合伙人申请";
        $box_title['b']["1"] = "财务汇总";
        $box_title['b']["2"] = "交易查询";
        $box_title['b']["3"] = "提现管理";
        $box_title['b']["4"] = "红包发放";
        $box_title['b']["5"] = "返利查询";
        $box_title['b']["6"] = "积分明细";
        $box_title['b']["7"] = "红包领取";
        $box_title['c']["1"] = "系统公告";
        $box_title['c']["2"] = "收件箱";
        $box_title['c']["3"] = "发件箱";
        $box_title['c']["4"] = "写信";
        $box_title['d']["1"] = "账号设置";
        $box_title['d']["2"] = "管理员设置";
        $box_title['d']["3"] = "系统设置";
        $box_title['d']["4"] = "管理组设置";
        $box_title['d']["5"] = "后台记录";

        return response()
        ->view("admin.$type$page", [
            'type'=>$type,
            'page'=>$page,
            'header'=>$header[$type],
            'box_title'=>$box_title[$type][$page],
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($edit)
    {
        return response()
        ->view("admin.edit.$edit");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
