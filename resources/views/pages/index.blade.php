@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')

<h1>{{count($comics)}}</h1>

<a href="{{route('users.create')}}">crea un nuovo comic</a>

<ul class="my-3">
    @foreach($comics as $comic)
    <li>
        <a href="{{route('users.show',$comic -> id)}}">
            nome del comic: {{ $comic->nome}}
        </a>
    </li>
    @endforeach
</ul>
@endsection