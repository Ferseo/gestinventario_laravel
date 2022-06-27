<?php

namespace App\Http\Controllers;

use App\Models\sonido;
use App\Http\Requests\StoresonidoRequest;
use App\Http\Requests\UpdatesonidoRequest;
use Illuminate\Http\Request;

class SonidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        $sonido =  sonido::all();
        if($sonido){
         echo 'Si existe payo';
         return response()->json($sonido);
        }else{
         echo 'no existe';
     }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoresonidoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store_(StoresonidoRequest $request)
    {
        //
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request){
        $data = $request->all();
        $sonido = new Sonido;
        $sonido->tipoMaterial = $data['tipoMaterial'];
        $sonido->marca = $data['marca'];
        $sonido->modelo = $data['modelo'];
        $sonido->cantidad = $data['cantidad'];
        $sonido->utilidad = $data['utilidad'];
        $sonido->ubicacion = $data['ubicacion'];
        $sonido->anioCompra = $data['anioCompra'];
        $sonido->tipoConexion = $data['tipoConexion'];
        $sonido->ultimaRevision = $data['ultimaRevision'];
        $sonido->observaciones = $data['Observaciones'];
        $sonido->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sonido  $sonido
     * @return \Illuminate\Http\Response
     */
    public function show(sonido $sonido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sonido  $sonido
     * @return \Illuminate\Http\Response
     */
    public function edit(sonido $sonido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesonidoRequest  $request
     * @param  \App\Models\sonido  $sonido
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesonidoRequest $request, sonido $sonido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sonido  $sonido
     * @return \Illuminate\Http\Response
     */
    public function destroy(sonido $sonido)
    {
        //
    }
}
