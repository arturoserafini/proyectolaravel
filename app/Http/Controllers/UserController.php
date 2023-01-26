<?php

namespace App\Http\Controllers;
use DataTables;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //listar usuarios
           $usuarios= User::all();
        return view("admin.usuario.listar",compact('usuarios'));
    }

    public function listarUsuariosDT(Request $request)
    {
        if($request->ajax()){
            $data = User::latest()->get();
            return DataTables::of($data)
                                ->addIndexColumn()
                                ->addColumn('accion', function($row){
                                    $botones = '<a href="javascript:void(0)">Editar</a><a href="javascript:void(0)">Eliminar</a>';
                                })
->rawColumns(['accion'])
                                ->make(true);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //cargar form de crear usuarios
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //guardar en la base de datos
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //mostrar un recurso por id
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //mostrar form de editar
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //actualizar la info del recurso en la bd
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //elimina un recurso por id en la bd
    }
}
