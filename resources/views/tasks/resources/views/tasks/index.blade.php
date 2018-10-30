@extends('layouts.app')

@section('content')
<h1>メッセージ一覧</h1>

    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
                <li>{{ $task->content }}</li>
            @endforeach
        </ul>
    @endif


@endsection

