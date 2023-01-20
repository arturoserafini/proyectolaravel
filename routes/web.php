<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

//REGISTROS DE USUARIOS
Route::get('/registro', [AuthController::class, "registrarse"])->name("registro");
Route::post('/registro', [AuthController::class, "guardarUsuario"])->name("guardarUsuario");
//RUTAS DE AUTH
