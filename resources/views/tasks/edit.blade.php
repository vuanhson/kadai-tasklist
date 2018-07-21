@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<h1>Update task has id: {{ $task->id }} </h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'Task content:') !!}
        {!! Form::text('content') !!}
    
        {!! Form::label('status', 'Task status:') !!}
        {!! Form::text('status') !!}
        
        {!! Form::submit('Update') !!}

    {!! Form::close() !!}
@endsection