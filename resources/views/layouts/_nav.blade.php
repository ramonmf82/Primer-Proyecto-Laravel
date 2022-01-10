<nav class="navbar navbar-expand-lg my-nav">
  <div class="container-fluid">
    <a class="navbar-brand my-link {{request()->routeIs('welcome') ? 'btn btn-primary' : ''}}" href="{{route('welcome')}}">Pruebas Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="my-link mx-5 {{request()->routeIs('contacto') ? 'btn btn-primary' : ''}}" href="{{route('contacto')}}">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="my-link mx-5 {{request()->routeIs('noticias.*') ? 'btn btn-primary' : ''}}" href="{{route('noticias.index')}}">Noticias</a>
        </li>
        
        <li class="nav-item">
          <a class="my-link mx-5" href="#">Log In</a>
        </li>
        <li class="nav-item">
          <a class="my-link mx-5 {{request()->routeIs('nosotros') ? 'btn btn-primary' : ''}}" href="{{route('nosotros')}}">Quién Soy</a>
        </li>
      </ul>
    </div>
  </div>
</nav>