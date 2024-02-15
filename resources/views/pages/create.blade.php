@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')

<form action="{{ route('users.store') }}" method="POST">

    @csrf

    @method('POST')


    <div class="my-3">
        <label for="nome">nome comic</label>
        <div>
            <input type="text" name="nome" id="nome">
        </div>
    </div>
    <div class="my-3">
        <label for="girono_uscita">data della sua uscita</label>
        <div>
            <input type="text" name="girono_uscita" id="girono_uscita">
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