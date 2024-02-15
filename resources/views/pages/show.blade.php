@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')

<!-- qua si mostra il singolo elemento -->
<div>
    <h1>
        <div>
            nome film: {{ $comic -> nome }}
        </div>

        <div>
            voto film:{{ $comic -> voto }}
        </div>
        <div>
            giorno uscita:{{ $comic -> girono_uscita  }}
        </div>
        <div>

        </div>
    </h1>
</div>
@endsection