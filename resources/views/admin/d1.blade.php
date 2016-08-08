@extends('layouts.admin') @section('title'){{ trans('tasks.head') }}@stop @section('header'){{ $header }}@stop @section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">{{ $box_title }}</h3>
    </div>


    <div class="box-body">

        <form class="form-horizontal" role="form" method="post">
            <div class="form-group">
                <label for="password" class="col-md-2 control-label">旧密码</label>
                <div class="col-md-6">
                    <input type="password" class="form-control" id="password" placeholder="请输入旧密码">
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-md-2 control-label">新密码</label>
                <div class="col-md-6">
                    <input type="password" class="form-control" id="password" placeholder="请输入新密码">
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-md-2 control-label">新密码</label>
                <div class="col-md-6">
                    <input type="password" class="form-control" id="password" placeholder="请输入新密码">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-offset-2 col-md-6">
                    <button type="submit" class="btn btn-default btn-block">提交修改</button>
                </div>
            </div>

        </form>


    </div>

    <!--<div class="box-footer clearfix">
        <ul class="pagination pagination-sm no-margin pull-right">
            <li><a href="#">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li class="disabled active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">&raquo;</a></li>
        </ul>
    </div>-->
</div>
@stop