@extends('layout')

@section('title', 'Home')

@section('content')

    @auth
        Bienvenido(a) {{ auth()->user()->name }}        
    @else
        Bienvenido Invitado
    @endauth

@endsection
