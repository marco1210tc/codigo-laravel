@extends('layout')

@section('title', 'Servicio | ' . $servicio->titulo)


@section('content')

<tr><td colspan="4"> {{ $servicio->titulo }} </td></tr><br>
<tr><td colspan="4"> {{ $servicio->descripcion }} </td></tr><br>
<tr><td colspan="4"> {{ $servicio->created_at->diffForHumans() }} </td></tr>
<br>
<br>
<tr><td> <a style="background-color: rgb(1, 78, 165); 
  padding: 8px 15px; 
  color: white; 
  text-decoration: none;
  border-radius: 7px;
  box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);
  " 
  href="{{route('servicios.edit', $servicio)}}"> Editar </a></td></tr>
@endsection