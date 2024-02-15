@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')

<div>
    <h1>
        [
        {{ $comic -> id }}
        ]
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