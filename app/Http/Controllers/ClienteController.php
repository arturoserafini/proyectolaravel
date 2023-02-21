<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function index_ajax(Request $request)
    {
        //if($request->ajax()){
            $cliente = Cliente::orWhere('nombre_completo', 'like', "%$request->buscar%")
                                ->orWhere('correo', 'like', "%$request->buscar%")
                                ->firstOrFail();
            return response()->json($cliente, 200);
        //}
    }

    public function guardar_axios(Request $request)
    {
        $clie = new Cliente();
        $clie->nombre_completo = $request->nombre_completo;
        $clie->correo = $request->correo;
        $clie->telefono = $request->telefono;
        $clie->save();

        return response()->json($clie, 201);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cliente.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
    
        $cliente->nombre_completo = $request->get('nombre_completo');
        $cliente->ruc = $request->get('ruc');
        $cliente->direccion = $request->get('direccion');
        $cliente->telefono = $request->get('telefono');
        $cliente->correo = $request->get('correo');
        $cliente->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}