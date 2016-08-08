@extends('layouts.admin') @section('title'){{ trans('tasks.head') }}@stop @section('header'){{ $header }}@stop @section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">{{ $box_title }}</h3>
    </div>
    <div class="box-body">
        <div class="list-group">
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">
                    用户统计
                </h4>
                <p class="list-group-item-text">
                    99999
                </p>
            </a>
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">
                    店铺数量
                </h4>
                <p class="list-group-item-text">
                    1212
                </p>
            </a>
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">
                    成交数
                </h4>
                <p class="list-group-item-text">
                    16142210
                </p>
            </a>
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">
                    营业额
                </h4>
                <p class="list-group-item-text">
                    1234567890
                </p>
            </a>
        </div>
    </div>
</div>
@stop