<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peliculas = Pelicula::paginate(2);
        return view("peliculas.index", ["peliculas" => $peliculas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("peliculas.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pelicula = Pelicula::create($request->all());
        return redirect()->route("indexPeliculas");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pelicula = Pelicula::findOrFail($id);
        return view("peliculas.show", ["pelicula" => $pelicula]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pelicula = Pelicula::findOrFail($id);
        return view("peliculas.edit", ["pelicula" => $pelicula]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->update($request->all());
        return redirect()->route("showPeliculas", ["id" => $pelicula]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pelicula::findOrFail($id)->delete();
        return redirect()->route('indexPeliculas');
    }

    public function vistaFiltrar() {
        $directores = Pelicula::pluck("director");
        return view("peliculas.filtrar", ["directores" => $directores]);
    }

    public function filtrar(Request $request) {
        $peliculas = Pelicula::where("director", $request->director)->paginate(2);
        return view("peliculas.index", ["peliculas" => $peliculas]);
    }
}
