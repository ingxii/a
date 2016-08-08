@extends('layouts.admin') @section('title'){{ trans('tasks.head') }}@stop @section('header'){{ $header }}@stop @section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">{{ $box_title }}</h3>
    </div>
    <div class="box-body">
        <form class="form-inline clearfix" role="form" method="GET">
            <div class="form-group">
                <label for="username">会员账号</label>
                <input type="text" class="form-control" id="username" name="username" value="" placeholder="请输入会员账号">
            </div>
            &nbsp;
            <div class="form-group">
                <label for="user_type">类型</label>
                <select name="user_type" id="user_type" class="form-control">
                <option value="0">全部</option>
                <option value="1">已通过</option>
                <option value="2">未通过</option>
                <option value="3">未处理</option>
            </select>
            </div>
            &nbsp;
            <div class="form-group">
                <button type="submit" class="btn btn-default "> 提交 </button>
            </div>
        </form>
    </div>
    <div class="box-body">

        <table class="table table-striped table-bordered table-hover table-condensed">
            <thead>
                <tr>
                    <th>id</th>
                    <th>账号</th>
                    <th>金额</th>
                    <th>户主</th>
                    <th>账户</th>
                    <th>提交时间</th>
                    <th>确认时间</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>abc</td>
                    <td>300</td>
                    <td>李四</td>
                    <td>62222222222241</td>
                    <td>{{ date("Y-m-d H:m:s") }}</td>
                    <td>{{ date("Y-m-d H:m:s") }}</td>
                    <td><a href="#">同意</a>|<a href="#">拒绝</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2</td>
                    <td>300</td>
                    <td>张三</td>
                    <td>62222222222241</td>
                    <td>{{ date("Y-m-d H:m:s") }}</td>
                    <td>{{ date("Y-m-d H:m:s") }}</td>
                    <td><a href="#">同意</a>|<a href="#">拒绝</a></td>
                </tr>
            </tbody>
        </table>


    <ul class="pagination pull-right">
        <li><a href="">第1页</a></li>
        <li><a href="">上一页</a></li>
        <li class="disabled active"><a href="#">1</a></li>
        <li><a href="">下一页</a></li>
        <li><a href="">第1页</a></li>
    </ul>

</div>
@stop