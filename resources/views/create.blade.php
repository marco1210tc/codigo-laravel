@extends('layout')

@section('title', 'Crear servicio')

@section('content')
  <h2> Creacion de servicio</h2>
  {{-- @if ($errors->any()) --}}
    {{-- <ul>
    @foreach ($errors->all() as $error)
      <li> {{ $error }} </li>
    @endforeach
    </ul>
  @endif --}}

  <form action="{{ route('servicios.store') }}" method="POST">
    @csrf
    <input type="text" name="titulo" placeholder="Nombre del servicio"> 
    {{ $errors->first('titulo') }}
    <input type="text" name="descripcion" placeholder="Descripcion">
    {{ $errors->first('descripcion') }}
    <button class="btn-create"> Guardar </button>
  </form>
@endsection