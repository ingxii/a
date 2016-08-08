@extends('layouts.app')

@section('content')
@include('common.errors')
<form action="" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" name="name" value="{{ $name }}">
    <input type="submit" value="提交">
</form>
@stop

@section('scripts')

@stop