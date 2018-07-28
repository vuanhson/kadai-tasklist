@extends('layouts.app')

@section('content')
    
<!-- ここにページ毎のコンテンツを書く -->
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        <p><h3>Welcome {{ $user->name }}, here is your tasklist:</h3></p>
        
        {!! link_to_route('tasks.create', 'Create new task', null, ['class' => 'btn btn-primary']) !!}
        @if (count($tasks) > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Task content</th>
                        <th>Task status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                            <td>{{ $task->content }}</td>
                            <td>{{ $task->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    
        @endif
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Tasklist</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection