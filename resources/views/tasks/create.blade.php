@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>Create new task</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'Task content:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('Submit') !!}

    {!! Form::close() !!}
@endsection