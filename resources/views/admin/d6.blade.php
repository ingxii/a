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
            <input type="hidden" name="e_type" value="">
            <button type="submit" class="btn btn-default "> 提交 </button>
            <div class="form-group pull-right">
                <a href="" class="btn btn-default">添加管理员</a>
            </div>
        </form>
    </div>
    <div class="box-body">


        <table class="table table-striped table-bordered table-hover table-condensed">
            <thead>
                <tr>
                    <th>id</th>
                    <th>管理员账号</th>
                    <th>电话</th>
                    <th>分组</th>
                    <th>权限</th>
                    <th>注册时间</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>admin</td>
                    <td>3</td>
                    <td>管理组</td>
                    <td>5</td>
                    <td>6</td>
                    <td><a href="#">操作</a></td>
                </tr>

            </tbody>
        </table>


    </div>

    <div class="box-footer clearfix">
        <ul class="pagination pagination-sm no-margin pull-right">
            <li><a href="#">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li class="disabled active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">&raquo;</a></li>
        </ul>
    </div>
</div>
@stop