@extends('layouts.app')

@section('title'){{  trans('tasks.title') }}@stop

@section('content')
    <div class="container">
        <div class="col-sm-offset-1 col-sm-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{  trans('tasks.create') }}
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Task Form -->
                    <form action="/task" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">name</label>
                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-url" class="col-sm-3 control-label">Url</label>
                            <div class="col-sm-6">
                                <input type="text" name="url" id="task-url" class="form-control" value="{{ old('task') }}" autocomplete="off">
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add Task
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current Tasks -->
            @if (count($tasks) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{  trans('tasks.list') }}
                    </div>

                    <div class="panel-body clearfix">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>id</th>
                                <th>name</th>
                                <th>url</th>
                                <th>user</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td class="table-text"><div>{{ $task->id }}</div></td>
                                        <td class="table-text"><div>{{ $task->name }}</div></td>
                                        <td class="table-text"><div>{{ $task->url }}</div></td>
                                        <td class="table-text"><div>{{ $task->user_id }}</div></td>

                                        <td>
                                            <form action="/task/{{ $task->id }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="  text-right  ">
                            <div class="">
                                {!! $tasks->appends($append)->render() !!}
                            </div>
                        </div>

                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
