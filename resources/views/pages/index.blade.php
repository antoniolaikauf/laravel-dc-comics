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
        <form action="{{route('users.destroy',$comic -> id)}}" method="POST">
            <!-- token per sicurezza  -->
            @csrf
            <!-- metodo post si usa nei form -->
            @method('DELETE')
            <input type="submit" value="delete">
        </form>
        <a href="{{route('users.edit',$comic -> id)}}">aggiorna</a>
    </li>
    @endforeach
</ul>

@endsection