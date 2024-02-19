@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')

<!--controllo del valore negli input -->
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<!-- action users.store sarebbe il metodo in nel comic controller  -->
<form action="{{ route('users.store') }}" method="POST">
    <!-- token per sicurezza  -->
    @csrf
    <!-- metodo post si usa nei form -->
    @method('POST')

    <!-- il nam eva dentro al metodo store nelle quadre in file comiccontroller -->
    <div class="my-3">
        <label for="nome">nome comic</label>
        <div>
            <input type="text" name="nome" id="nome">
        </div>
    </div>
    <div class="my-3">
        <label for="prezzo">prezzo</label>
        <div>
            <input type="text" name="prezzo" id="prezzo">
        </div>
    </div>
    <div class="my-3">
        <label for="voto">voto</label>
        <div>
            <input type="text" name="voto" id="voto">
        </div>
    </div>
    <input type="submit" value="create">
</form>
@endsection