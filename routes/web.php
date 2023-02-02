<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [AuthController::class, "formLogin"])->name("login");
Route::post('/login', [AuthController::class, "login"])->name("ingresar");
//REGISTROS DE USUARIOS
Route::get('/registro', [AuthController::class, "registrarse"])->name("registro");
Route::post('/registro', [AuthController::class, "guardarUsuario"])->name("guardarUsuario");
//RUTAS DE AUTH



// CRUD DE USUARIO
//solo lo que trae el resource solo para crud
Route::resource("usuario", UserController::class);
//lista de usuarios datatables con ajax
Route::get('/usuarios-dt', [UserController::class, "listarUsuariosDT"])->name("listarUsuariosDT");




   // CRUD Producto
   Route::resource("categoria", CategoriaController::class);
   
   Route::resource("pedido", PedidoController::class);
   Route::resource("cliente", ClienteController::class);

//cerrar sesion
Route::post('/salir', [AuthController::class, "logout"])->name("logout");
//exportar excel
 Route::get("/producto/exportar-excel", [ProductoController::class, "exportarEnExcel"]);
 Route::resource("producto", ProductoController::class);

Route::get("/admin",function(){
return view("admin.admin");
})->middleware("auth");//proteger la ruta

