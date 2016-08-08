@extends('layouts.admin') @section('title'){{ trans('tasks.head') }}@stop @section('header'){{ $header }}@stop @section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">{{ $box_title }}</h3>
    </div>


    <div class="box-body">

        <form class="form-horizontal" role="form" method="post">
            <div class="form-group">
                <label for="password" class="col-md-1 control-label">收件人</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="password" placeholder="">
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-md-1 control-label">标题</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="password" placeholder="">
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-md-1 control-label">正文</label>
                <div class="col-md-6">
                    <textarea class="form-control" rows="6"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-offset-1 col-md-6">
                    <button type="submit" class="btn btn-default ">发送</button>
                </div>
            </div>

        </form>

    </div>


</div>
@stop