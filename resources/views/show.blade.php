@extends('layout')

@section('title', 'Servicio | ' . $servicio->titulo)

<style>
  .btn {
    padding: 8px 15px; 
    color: white; 
    text-decoration: none;
    border-radius: 7px;
    border-style: none;
    box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);
  }
  .btn-edit {
    background-color: rgb(7, 50, 114);
  }
  .btn-delete {
    background-color: red;
  }

  form{
    margin: 0;
  }
</style>

@section('content')
<div style="width: 15%">
  <div style="margin-left: 20px">

    <div style="margin-top: 15px; ">
      <img src="/storage/{{$servicio->image}}" width="100" height="100"
        alt="imagen">
    </div>


    <tr><td colspan="4"> {{ $servicio->titulo }} </td></tr>
    <br>
    <tr><td colspan="4"> {{ $servicio->descripcion }} </td></tr>
    <br>
    <tr><td colspan="4"> {{ $servicio->created_at->diffForHumans() }} </td></tr>
    <br>
    <br>

    <div style="width: 100%; display: flex; justify-content: center; align-items: center">

      @auth
          
        <div style="margin: 10px 20px"> 
          <a class="btn btn-edit" href="{{ route('servicios.edit', $servicio) }}"> Editar </a> 
        </div>

        <div style="margin: 20px 5px">   
          <form action="{{ route('servicios.destroy', $servicio) }}" method="POST" > 
          @csrf
          @method('DELETE')
            <button class="btn btn-delete"> Eliminar </button>
          </form>
        </div>
      
      @endauth
    </div>
  </div>

    <div style="margin-left: 15px">
      <a href="{{ route('servicios.index') }}"> << Regresar </a>
    </div>
</div>

@endsection