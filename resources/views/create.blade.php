@extends('layout')

@section('title', 'Crear servicio')

@section('content')
  <h2> Creacion de servicio</h2>
  @if ($errors->any())
    <ul>
    @foreach ($errors->all() as $error)
      <li> {{ $error }} </li>
    @endforeach
    </ul>
  @endif

  @include('partials.validation-errors')

  <form action="{{ route('servicios.store') }}" method="POST">
    @csrf
      @include('partials.form', ['btnText' => 'Guardar'])
  </form>
@endsection