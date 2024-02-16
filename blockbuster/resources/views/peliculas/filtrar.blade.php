@extends("layouts.plantilla")

@section("titulo", "Buscar Pelicula")

@section("contenido")
    <div class="container d-flex flex-column justify-content-center align-items-center gap-2 h-100">
        <h1>Buscar pelicula por director</h1>
        <form action="{{ route('filtrarPeliculas') }}" class="d-flex flex-column gap-2 align-items-center" method="POST">
            @csrf
            <select name="director" id="director">
                @foreach($directores as $director)
                    <option value="{{ $director }}">{{ $director }}</option>
                @endforeach
            </select>
            <button class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection