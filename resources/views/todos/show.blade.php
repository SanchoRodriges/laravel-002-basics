@extends('todos.layout')

@section('content')

    <h1>{{ $todos->title }}</h1>
    <p>{{ $todos->description }}</p>
@endsection
