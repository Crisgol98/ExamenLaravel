@extends("layouts.plantilla")

@section("titulo", "Lista de Peliculas")

@section("contenido")

<div class="container d-grid gap-3 w-50">
    @forelse($peliculas as $pelicula)
        <div class="card">
            <div class="card-body index-card d-flex justify-content-center align-items-center flex-column">
                <h1>{{ $pelicula->title }}({{ $pelicula->year }})</h1>
                <img src="{{ $pelicula->poster }}" alt="Imagen de {{ $pelicula->title }}">
                <p>{{ $pelicula->synopsis }}</p>
                <a class="btn btn-secondary" href="{{ route('showPeliculas', $pelicula->id) }}">Ver más</a>
            </div>
        </div>
    @empty
        <div class="card">
            <div class="card-body">
                <h1>No hay peliculas</h1>
            </div>
        </div>
    @endforelse
    {{ $peliculas->links() }}
</div>

@endsection