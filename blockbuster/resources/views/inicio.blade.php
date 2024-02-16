@extends("layouts.plantilla")

@section("titulo", "Inicio")

@section("contenido")

<div class="container d-flex justify-content-center align-items-center h-100 flex-column gap-3">
    <select name="usuario" id="usuario" class="form-select w-50">
        @foreach($usuarios as $usuario)
            <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
        @endforeach
    </select>
    <a href="{{ route('indexPeliculas') }}" class="btn btn-primary">Entrar</a>
</div>
@endsection