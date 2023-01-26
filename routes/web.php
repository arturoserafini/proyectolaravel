<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

//REGISTROS DE USUARIOS
Route::get('/registro', [AuthController::class, "registrarse"])->name("registro");
Route::post('/registro', [AuthController::class, "guardarUsuario"])->name("guardarUsuario");
//RUTAS DE AUTH


// CRUD DE USUARIO
//solo lo que trae el resource solo para crud
Route::resource("usuario", UserController::class);
//lista de usuarios datatables con ajax
Route::get('/usuarios-dt', [UserController::class, "listarUsuariosDT"])->name("listarUsuariosDT");

Route::get('/login', [AuthController::class, "formLogin"])->name("login");
Route::post('/login', [AuthController::class, "login"])->name("ingresar");


//cerrar sesion
Route::post('/salir', [AuthController::class, "logout"])->name("logout");

Route::get("/admin",function(){
return view("admin.admin");
})->middleware("auth");//proteger la ruta