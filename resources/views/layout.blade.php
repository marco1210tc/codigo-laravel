<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <style>
      .activo a {
        color: red;
        text-decoration: underline;
      }
      * {
        font-family: Roboto, Arial;
      }
      .navbar {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
      }
      .navbar {
        font-size: 20px;
        list-style: none;
        padding: 15px 0px;
      }
    </style>

  </head>

  <body>

    @include('partials.navbar')
    @yield('content')

  </body>

</html>