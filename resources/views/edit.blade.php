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

  @auth
    
  @include('partials.validation-errors')
  <form action="{{ route('servicios.update', $servicio->id) }}" method="POST" enctype="multipart/form-data">
    @method('PATCH')
    
    <img src="/storage/{{$servicio->image}}" width="100" height="100"
    alt="imagen">

    @include('partials.form', ['btnText' => 'Actualizar'])
  </form>
  @endauth
  
@endsection