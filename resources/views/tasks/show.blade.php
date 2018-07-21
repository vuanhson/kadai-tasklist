@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>Details of Task's ID = {{ $task->id }}</h1>
    {!! link_to_route('tasks.edit', 'Update this task', ['id' => $task->id]) !!}
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('Delete this Task') !!}
    {!! Form::close() !!}
    <p>Task content: {{ $task->content }} and task status is: {{$task->status}}</p>
    
@endsection