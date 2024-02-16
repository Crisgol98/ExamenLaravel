<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;
use App\Models\Usuario;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $usuarios = Usuario::all();
    return view('inicio', ["usuarios" => $usuarios]);
})->name("inicio");

Route::get("peliculas", [PeliculaController::class, "index"])->name("indexPeliculas");
Route::get("peliculas/create", [PeliculaController::class, "create"])->name("createPeliculas");
Route::get("peliculas/filtrar", [PeliculaController::class, "vistaFiltrar"])->name("vistaFiltrarPeliculas");
Route::get("peliculas/{id}", [PeliculaController::class, "show"])->name("showPeliculas");
Route::get("peliculas/{id}/edit", [PeliculaController::class, "edit"])->name("editPeliculas");
Route::post("peliculas/store", [PeliculaController::class, "store"])->name("storePeliculas");
Route::post("peliculas/{id}/update", [PeliculaController::class, "update"])->name("updatePeliculas");
Route::post("peliculas/{id}/delete", [PeliculaController::class, "destroy"])->name("deletePeliculas");
Route::post("peliculas/filtrado", [PeliculaController::class, "filtrar"])->name("filtrarPeliculas");