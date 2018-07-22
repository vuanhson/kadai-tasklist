@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1><center>Details of Task's ID = {{ $task->id }}</center></h1>
    {!! link_to_route('tasks.edit', 'Update this task', ['id' => $task->id],['class' => 'btn btn-default']) !!}
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('Delete this Task',['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>Content</th>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $task->status }}</td>
        </tr>
    </table>

    
@endsection