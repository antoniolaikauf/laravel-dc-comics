@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')
<h1>Hello, World!</h1>

<h1>{{count($comics)}}</h1>
@endsection