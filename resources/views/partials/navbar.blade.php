{{-- <nav class="navbar"> --}}
  {{-- {{(request()->routeIs('home'))}} --}}
  {{-- <li class="{{ setActivo('home') }}"><a href="/">Home</a></li>
  <li class="{{ setActivo('nosotros') }}"><a href="nosotros">Nosotros</a></li>
  <li class="{{ setActivo('servicios') }}"><a href="servicios">Servicios</a></li>
  <li class="{{ setActivo('contacto') }}"><a href="contacto">Contacto</a></li> --}}
{{-- </nav> --}}

<nav>
  <table class="navbar">
    {{-- {{(request()->routeIs('home'))}} --}}
    <thead >
      <tr> 
        <th scope="col" class="{{ setActivo('home') }}"><a href="/">Home</a> </th>
        <th scope="col" class="{{ setActivo('nosotros') }}"><a href="nosotros">Nosotros</a></th>
        <th scope="col" class="{{ setActivo('servicios') }}"><a href="servicios">Servicios</a> </th>
        <th scope="col" class="{{ setActivo('contacto') }}"><a href="contacto">Contacto</a> </th>
      </tr>
    </thead>
        
  </table>
  
</nav>