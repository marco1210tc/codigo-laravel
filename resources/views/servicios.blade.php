@extends('layout')

@section('title', 'Servicios')

  <!-- Bootstrap CSS v5.2.1 -->
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous"
  />

@section('content')
  <div class="container">

    <h2> Servicios </h2>

    @auth
    
    <a style="background-color: green; 
              padding: 10px 15px;
              color: white; 
              text-decoration: none;
              border-radius: 7px;
              box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5)" href="{{route('servicios.create')}}"> + Agregar servicio 
    </a>
    @endauth

    <h4 class="mt-3"> Lista de Servicios </h4>
    
    @if($servicios)
      <div class="d-flex" >
        @foreach($servicios as $item)
          {{-- <td> <a href="{{route('servicios.show', $item)}}"> {{ $item->titulo }} </a> <br> {{ $item->descripcion}} </td> --}}
          
          <div class="col-2 d-flex flex-column align-items-center" >
            @if ($item->image)
              <img src="/storage/{{$item->image}}" width="50" height="50">
            @endif
            <a style="" href="{{route('servicios.show', $item)}}"> {{ $item->titulo }} </a>
          </div>
          
        @endforeach
     </div>
  
    @else
      <h3> No existe ningún servicio que mostrar </h3>
    @endif
    <div class="mt-3">
      {{ $servicios->links('pagination::bootstrap-4') }}
    </div>
  </div>
@endsection

 
{{-- <!-- Bootstrap JavaScript Libraries -->
   <script
   src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
   integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
   crossorigin="anonymous"
 ></script>

 <script
   src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
   integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
   crossorigin="anonymous"
 ></script> --}}


