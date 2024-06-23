@extends('layout')

@section('title', 'Servicios')

@section('content')
  <h2> Servicios </h2>

  <a style="background-color: green; 
            padding: 10px 15px; 
            color: white; 
            text-decoration: none;
            border-radius: 7px;
            box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);
            " 
     href="{{route('servicios.create')}}"> + Agregar servicio </a>

  <h4> Lista de Servicios </h4>
  @if($servicios)
  <table>
    <tr>
      @foreach($servicios as $item)
        {{-- <td> <a href="{{route('servicios.show', $item)}}"> {{ $item->titulo }} </a> <br> {{ $item->descripcion}} </td> --}}
        <td> <a style="margin-right: 80px" href="{{route('servicios.show', $item)}}"> {{ $item->titulo }} </a></td>
      @endforeach
    </tr>
  </table>
  @else
    <h3> No existe ningun servicio que mostrar </h3>
  @endif
  <div style="width: 200px; height: 20px; margin: 35px 0">
    <td colspan="4"> {{ $servicios->links() }} </td>
  </div>

 @endsection