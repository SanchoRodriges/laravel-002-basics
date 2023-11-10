@extends('todos.layout')

@section('content')

    <h1>Добавить задачу</h1>
    <form action="{{ route('todo.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="укажите заголовок">
        <input type="text" name="description" placeholder="опишите задачу">
        <button>Создать</button>
    </form>
@endsection
