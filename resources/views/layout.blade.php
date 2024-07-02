<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="shortcut icon" type="image/png" href="{{ asset('/img/favicon_192x192.png') }}">
    <link rel="shortcut icon" sizes="192x192" href="{{ asset('/img/favicon_192x192.png') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
    <title>@yield('title')</title>

  </head>

  <body>
    @include('partials.navbar')
    @yield('content')


  </body>

</html>