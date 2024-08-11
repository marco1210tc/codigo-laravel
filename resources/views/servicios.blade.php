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

    @isset($category)

    <div>
        <div class="display-4 mb-0">
            <h1>{{ $category->name }}</h1>
        </div>

        <span class="mb-2">
            <a href="{{ route('servicios.index') }}"> Regresar a servicios </a>
        </span>
    </div>

    
    @else

        <h1 class="display-4 mb-0">Servicios</h1>
        
    @endisset

    <tr>
        @auth
            <td colspan="5">
                <a class="btn btn-primary" href="{{ route('servicios.create') }}"> + Nuevo Servicio</a>
            </td>
        @endauth
    </tr>

    <hr class="mt-3">

    <tr>
        <td colspan="5">
            <p class="lead text-secondary">Listado de Servicio</p>
            <div class="d-flex flex-wrap justify-content-between align-items-start">
                @forelse($servicios as $servicio)
                    <div class="card border-0 shadow-sm mt-4 mx-auto" style="width: 18rem">
                        @if ($servicio->image)
                            <img class="card-img-top" style="height: 150px; object-fit: cover"
                                src="/storage/{{ $servicio->image }}" alt="{{ $servicio->titulo }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('servicios.show', $servicio) }}">{{ $servicio->titulo }}</a>
                            </h5>
                            <h6 class="card-subtitle">{{ $servicio->created_at->format('d/m/Y') }}</h6>
                            <p class="card-text text-truncate">{{ $servicio->descripcion }}</p>

                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('servicios.show', $servicio) }}" class="btn btn-primary btn-sm">
                                    Ver más...
                                </a>
                                <!-- Preguntamos si tenemos definido category_id
                                    y solo asi mostramos el enlace, de lo cobtrario no -->
                                @if ($servicio->category_id)
                                    <a href="{{route('categories.show', $servicio->category)}}" 
                                        class="badge badge-secondary text-white bg-secondary text-sm text-decoration-none">
                                        {{ $servicio->category->name }}
                                    </a>
                                @endif
        
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="card">
                        <div class="card-body">
                            No hay servicios para mostrar
                        </div>
                    </div>
                @endforelse
            </div>

            <div class="mt-4">
                {{ $servicios->links('pagination::bootstrap-4') }}
            </div>
        </td>
    </tr>

</div>
@endsection