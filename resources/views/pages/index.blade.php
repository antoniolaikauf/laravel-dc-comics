@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')
<h1>Hello, World!</h1>

<h1>{{count($comics)}}</h1>

<ul>
    @foreach($comics as $comic)
    <li>
        <a href="{{route('users.show',$comic -> id)}}">
            nome del comic: {{ $comic->nome}}
        </a>
    </li>
    @endforeach
</ul>
@endsection