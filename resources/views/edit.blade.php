@extends('layout')

@section('title', 'Editar servicio')

@section('content')
  <h2> Edición de servicio</h2>

  @if ($errors->any())
    <ul>
      @foreach ($errors->all() as $error)
        <li> {{ $error }} </li>
      @endforeach
    </ul>
  @endif

  @include('partials.validation-errors')
  <form action="{{ route('servicios.update', $servicio->id) }}" method="POST">
    @method('PATCH')
    @include('partials.form', ['btnText' => 'Actualizar'])
  </form>
@endsection