<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>@yield('title')</title>
  </head>

  <body>
    <nav>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="nosotros">Nosotros</a></li>
        <li><a href="servicios">Servicios</a></li>
        <li><a href="contacto">Contacto</a></li>
      </ul>
    </nav>

    @yield('content')

  </body>

</html>