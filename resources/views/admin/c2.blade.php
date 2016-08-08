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
                    <th>编号</th>
                    <th>发件人</th>
                    <th>标题</th>
                    <th>状态</th>
                    <th>发件时间</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>admin</td>
                    <td>nihao</td>
                    <td><b>未读</b></td>
                    <td>{{ date('Y-m-d H:m:s') }}</td>
                    <td><a href="/admin/userview">查看</a></td>
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