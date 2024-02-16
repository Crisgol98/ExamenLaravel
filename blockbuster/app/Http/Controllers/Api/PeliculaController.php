<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelicula = Pelicula::all();
        return response()->json($pelicula, 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pelicula = Pelicula::create($request->all());
        return response()->json($pelicula, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelicula $pelicula)
    {
        return response()->json($pelicula, 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelicula $pelicula)
    {
        $pelicula->update($request->all());
        return response()->json($pelicula);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelicula $pelicula)
    {
        $pelicula->delete();
        return response()->json(null, 204);
    }
}
