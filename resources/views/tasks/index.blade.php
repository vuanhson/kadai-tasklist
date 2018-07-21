@extends('layouts.app')

@section('content')
    
<!-- ここにページ毎のコンテンツを書く -->
    {!! link_to_route('tasks.create', 'Create new task') !!}
    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
                <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} :  {{ $task->content }} ........ {{ $task->status }}</li>
            @endforeach
        </ul>
    @endif
@endsection