@extends('layouts.app')
@section('content')
<!-- Bootstrap Boilerplate... -->
<div class="panel-body">
    <!-- New Task Form -->
    <form action="{{ route('tasks.store') }}" method="POST" class="form-horizontal">
        @csrf
        <!-- Task Name -->
        <div class="form-group">
            <label for="task" class="col-sm-3 control-label">{{ trans('setting.task') }}</label>
            <div class="col-sm-12">
                <input type="text" name="name" id="task-name" class="form-control">
            </div>
        </div>
        <!-- Add Task Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default btn-primary">
                    <i class="fa fa-plus"></i> {{ trans('setting.add_task') }}
                </button>
            </div>
        </div>
    </form>
</div>
@if (session('alert'))
    <div class="alert alert-success">{{ session('alert') }}</div>
@endif
@if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
<!-- Display Validation Errors -->
@include('common.errors')
    <!-- TODO: Current Tasks -->
@if (count($tasks) > config('configtasks.zero'))
<div class="panel panel-default">
    <div class="panel-body">
        <table class="table table-striped task-table">
            <hr>
            <!-- Table Body -->
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <!-- Task Name -->
                    <td class="table-text">
                        <div>{{ $task->name }}</div>
                    </td>
                    <td>
                        <!-- TODO: Delete Button -->
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger"><i class="fas fa-trash-alt"></i>
                                {{ trans('setting.delete_task') }}</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@endsection
