@extends("layouts.plantilla")

@section("titulo", "Pelicula")

@section("contenido")

<div class="container">
    <div class="card">
        <div class="card-body show-card d-flex justify-content-center align-items-center flex-column">
            <h1>{{ $pelicula->title }}({{ $pelicula->year }})</h1>
            <img src="{{ $pelicula->poster }}" alt="Imagen de {{ $pelicula->title }}">
            <p>{{ $pelicula->synopsis }}</p>
            @if($pelicula->rented) 
                <h2>Esta pelicula esta rentada</h2>
            @else
                <h2>Esta pelicula no esta rentada</h2>
            @endif
            <div class="d-flex gap-4 mb-2">
                <a href="{{ route('editPeliculas', $pelicula->id) }}" class="btn btn-primary" >Editar</a>
                <form action="{{ route('deletePeliculas', $pelicula->id) }}" method="POST">
                    @csrf
                    <button class="btn btn-danger">Borrar</button>
                </form>
            </div>
            <a href="{{ route('indexPeliculas') }}" class="btn btn-info" >Volver</a>
        </div>
    </div>
</div>
@endsection