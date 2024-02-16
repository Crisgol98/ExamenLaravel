@extends("layouts.plantilla")

@section("titulo", "Crear Pelicula")

@section("contenido")


<form action="{{ route('storePeliculas') }}" method="POST" class="container m-4">
    @csrf
    <div class="mb-3">
        <label for="titulo" class="form-label">Titulo</label>
        <input type="text" class="form-control" id="titulo" name="title" placeholder="Titulo de la pelicula">
    </div>
    <div class="mb-3">
        <label for="year" class="form-label">Año</label>
        <input type="text" class="form-control" id="year" name="year" placeholder="Año de salida">
    </div>
    <div class="mb-3">
        <label for="director" class="form-label">Director</label>
        <input type="text" class="form-control" id="director" name="director" placeholder="Director de la pelicula">
    </div>
    <div class="mb-3">
        <label for="poster" class="form-label">Poster</label>
        <input type="text" class="form-control" id="poster" name="poster" placeholder="Url del poster">
    </div>
    <div class="mb-3">
        <label for="year" class="form-label">Está rentada?</label>
        <div class="form-check">
        <label class="form-check-label"  for="si">Si</label>
        <input class="form-check-input" type="radio" name="rented" value="1" id="si">
    </div>
    <div class="form-check">
        <label class="form-check-label" for="no">No</label>
        <input class="form-check-input" type="radio" name="rented" value="0" id="no" checked>
    </div>
    <div class="mb-3">
        <label for="synapsis" class="form-label">Synapsis</label>
        <textarea class="form-control" id="synapsis" name="synopsis" rows="3" placeholder="Synapsis de la pelicula"></textarea>
    </div>
    <button class="btn btn-primary">Enviar</button>
</form>

@endsection