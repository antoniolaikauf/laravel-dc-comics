@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')

<h1>{{count($comics)}}</h1>

<a href="{{route('users.create')}}">crea un nuovo comic</a>

<ul class="list-group my-3 lista">
    @foreach($comics as $comic)
    <li class="list-group-item">
        <a href="{{route('users.show',$comic -> id)}}">
            nome del comic: {{ $comic->nome}}
        </a>
    </li>
    @endforeach
</ul>

@endsection