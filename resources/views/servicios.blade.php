@extends('layout')

@section('title', 'Servicios')

@section('content')
  <h2> Servicios </h2>

  @if($servicios)
  <table>
    <tr>
      @foreach($servicios as $item)
        {{-- <td> <a href="{{route('servicios.show', $item)}}"> {{ $item->titulo }} </a> <br> {{ $item->descripcion}} </td> --}}
        <td> <a href="{{route('servicios.show', $item)}}"> {{ $item->titulo }} </a></td>
      @endforeach
    </tr>
  </table>
  @else
    <h3> No existe ningun servicio que mostrar </h3>
  @endif
  <td colspan="4"> {{$servicios->links()}} </td>



 @endsection