@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')
<h1>Hello, World!</h1>

<form action="">
    <div class="my-3">
        <label for="name-comic">nome comic</label>
        <div>
            <input type="text" name="name" id="name-comic">
        </div>
    </div>
    <div class="my-3">
        <label for="data">data della sua uscita</label>
        <div>
            <input type="text" name="data-uscita" id="data">
        </div>
    </div>
    <div class="my-3">
        <label for="voto">voto</label>
        <div>
            <input type="text" name="voto" id="voto">
        </div>
    </div>
    <input type="button" value="crea">
</form>
@endsection