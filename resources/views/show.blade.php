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

<tr><td colspan="4"> {{ $servicio->titulo }} </td></tr>
<br>
<tr><td colspan="4"> {{ $servicio->descripcion }} </td></tr>
<br>
<tr><td colspan="4"> {{ $servicio->created_at->diffForHumans() }} </td></tr>
<br>
<br>
<div style="display: flex; justify-content: flex-start; align-items: center">

  @auth
      
  <div style="margin: 10px 20px"> 
    <a class="btn btn-edit" href="{{ route('servicios.edit', $servicio) }}"> Editar </a> 
  </div>
  <div style="margin: 20px 20px">   
    <form action="{{ route('servicios.destroy', $servicio) }}" method="POST" > 
    @csrf 
	  @method('DELETE')
      <button class="btn btn-delete"> Eliminar </button>
    </form>   
  </div>
  
  @endauth
</div>
@endsection