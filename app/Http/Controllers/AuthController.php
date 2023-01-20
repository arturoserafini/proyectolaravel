<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class AuthController extends Controller
{


    /*cargar el formulario de registro de usuarios*/ 
    public function registrarse(){
        return view("auth.registro");
    }
    public function guardarUsuario(Request $request){
        //validar
        $request->validate([
            "name"=> "required",
            "email"=> "required|email|unique:users",
            "password"=> "required",
            "c_password"=> "required|same:password"
            
        ]);


        //guardar
    $u = new User;
    $u->name = $request->name;
    $u->email = $request->email;
    $u->password = $request->password;

        //redireccionar
    }

}
