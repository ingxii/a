@extends('layouts.admin')
@section('title'){{ trans('tasks.head') }}@stop
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        会员列表
    </div>
    <div class="panel-body ">
        <table class="table table-striped table-bordered table-hover table-condensed">
            <thead>
                <tr>
                    <th>id</th>
                    <th>姓名</th>
                    <th>电话</th>
                    <th>账户</th>
                    <th>推荐人</th>
                    <th>注册时间</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
@stop