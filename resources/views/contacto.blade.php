@extends('layout')

@section('title', 'Contacto')

@section('content')
  <h2>Contacto</h2>
<div class="container-centered">
  <div class="form">
    <form action="{{route('contacto.store')}}" method="POST">
      @csrf
      <div class="form-group">
        <label for="nonbre" > Nombre </label>
        <input name="nombre" type="text" placeholder="Nombre" value="{{ old('nombre') }}">
        <br>
        {{ $errors->first('nombre') }}
      </div>
      <div class="form-group">
        <label for="email"> Correo </label>
        <input name="email" type="text" placeholder="Email" value="{{ old('email') }}">
        <br>
        {{ $errors->first('email') }}
      </div>
      <div class="form-group">
        <label for="asunto"> Asunto </label>
        <input name="asunto" type="text" placeholder="Asunto" value="{{ old('asunto') }}">
        <br>
        {{ $errors->first('asunto') }}
      </div>
      <div class="form-group">
        <label for="mensaje"> Descripcion </label>
        <textarea name="mensaje" placeholder="Descripcion" value="{{ old('mensaje') }}">
        </textarea>
        <br>
        {{ $errors->first('mensaje') }}
      </div>
      <div class="">
        <button type="submit" class="btn btn-send" > Enviar </button>
        <button type="reset" class="btn btn-cancel"> Cancelar </button>
      </div>
    </form>
  </div>
</div>
@endsection
