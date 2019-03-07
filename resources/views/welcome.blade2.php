@extends('layout')

@section('content')

    <h1>My First '{{ $foo }}'  Website with Laravel</h1>
    <!--{{$istek}}-->
    <ul>
        @foreach($tasks as $task)
            <!--<li><?= $task; ?></li>-->
            <li>{{ $task }}</li>
        @endforeach
    </ul>

@endsection