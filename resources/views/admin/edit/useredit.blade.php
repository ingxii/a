@extends('layouts.admin') @section('title'){{ trans('tasks.head') }}@stop @section('header')用户编辑 @stop @section('content')

<div class="box  ">
    <div class="box-header with-border">
        <h3 class="box-title">用户编辑</h3>
    </div>
    <!-- /.box-header -->

    <form class="form-horizontal">
        <div class="box-body">
            <div class="form-group">
                <label for="inputusername3" class="col-sm-2 control-label">用户名</label>
                <div class="col-sm-6">
                    <input type="username" class="form-control" id="inputusername3" placeholder="用户名">
                </div>
            </div>
            <div class="form-group">
                <label for="inputusername3" class="col-sm-2 control-label">电话</label>
                <div class="col-sm-6">
                    <input type="username" class="form-control" id="inputusername3" placeholder="电话">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">省市区</label>
                <div class="col-sm-3">
                    <select class="form-control">
                        <option>省</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                </div>
                <div class="col-sm-3">
                    <select class="form-control">
                        <option>市</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                </div>
                <div class="col-sm-3">
                    <select class="form-control">
                        <option>区</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputusername3" class="col-sm-2 control-label">详细地址</label>
                <div class="col-sm-6">
                    <input type="username" class="form-control" id="inputusername3" placeholder="街道门牌号码">
                </div>
            </div>

            <div class="form-group">
                <label for="inputusername3" class="col-sm-2 control-label">性别</label>
                <div class="col-sm-6">
                    <div class="radio">
                        <label><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>男</label>
                        <label><input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">女</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-6">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" disabled>合伙人</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-6">
                    <button type="submit" class="btn btn-info ">提交</button>
                </div>
            </div>
        </div>
        <!-- /.box-footer -->
    </form>

    <!-- /.box-body -->
</div>

@stop