@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
@if (Auth::check())
    <h1><center>Create new task</center></h1>

    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-offset-8 col-lg-offset-3 col-lg-6">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
            <div class="form-group">
                {!! Form::label('content', 'Task content:') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('status', 'Task status:') !!}
                {!! Form::text('status', null, ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    
            {!! Form::close() !!}
        </div>
    </div>
@else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Tasklist</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
@endif
@endsection