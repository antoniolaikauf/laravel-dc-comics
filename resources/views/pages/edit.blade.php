@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')

<!-- action users.store sarebbe il metodo in nel comic controller  -->
<form action="{{ route('users.update',$comic -> id) }}" method="POST">
    <!-- token per sicurezza  -->
    @csrf
    <!-- metodo post si usa nei form -->
    @method('PUT')

    <!-- il nam eva dentro al metodo store nelle quadre in file comiccontroller -->
    <div class="my-3">
        <label for="nome">nome comic</label>
        <div>
            <input type="text" name="nome" id="nome" value="{{$comic->nome}}">
        </div>
    </div>
    <div class="my-3">
        <label for="girono_uscita">data della sua uscita</label>
        <div>
            <input type="text" name="girono_uscita" id="girono_uscita" value="{{$comic->girono_uscita}}">
        </div>
    </div>
    <div class="my-3">
        <label for="voto">voto</label>
        <div>
            <input type="text" name="voto" id="voto" value="{{$comic->voto}}">
        </div>
    </div>
    <input type="submit" value="upgrade">
</form>
@endsection