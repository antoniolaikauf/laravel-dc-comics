@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')
<h1>Hello, World!</h1>

<div>
    <h1>comic</h1>
    {{$comic->nome}}
</div>
@endsection