<nav>
  <table class="navbar">
    {{-- {{(request()->routeIs('home'))}} --}}
    <thead>
      <tr> 
        <th scope="col" class="{{ setActivo('home') }}"><a href="/">Home</a> | </th>
        <th scope="col" class="{{ setActivo('nosotros') }}"><a href="nosotros">Nosotros </a> |</th>
        <th scope="col" class="{{ setActivo('servicios') }}"><a href="servicios">Servicios </a> | </th>
        <th scope="col" class="{{ setActivo('contacto') }}"><a href="contacto">Contacto  </a> | </th>
        @guest
          <th><a href="{{ route('login') }}"> Login </a> | </th>
        @else
          <th scope="col" colspan="3" >
            <a href="#" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              Cerrar Sesión 
            </a>
          </th>
        @endguest
      </tr>
    </thead>
        
  </table>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
  </form>

</nav>