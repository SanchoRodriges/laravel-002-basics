@extends('todos.layout')

@section('content')
    <h1>Все задачи</h1>
    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo->id }}
                <strong>{{ $todo->title }}</strong> -
                {{ $todo->description }}
                {{ $todo->is_completed ? 'выполнено' : 'не выполнено' }}
                <a href="/todo/{{ $todo->id }}">подробнее</a></li>
        @endforeach
    </ul>
@endsection
