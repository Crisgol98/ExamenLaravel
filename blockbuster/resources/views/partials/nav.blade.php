<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">BlockBuster</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('inicio') }}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('indexPeliculas') }}">Listado Peliculas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('createPeliculas') }}">Crear Pelicula</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('vistaFiltrarPeliculas') }}">Buscar Pelicula</a>
        </li>
      </ul>
    </div>
  </div>
</nav>