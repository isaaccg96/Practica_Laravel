<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/peliculas', [PeliculasController::class, 'index']);

Route::get('/peliculas/create', [PeliculasController::class, 'create']);

Route::post('/peliculas/store', [PeliculasController::class, 'store']);

Route::get('/peliculas/{id}', [PeliculasController::class, 'show']);