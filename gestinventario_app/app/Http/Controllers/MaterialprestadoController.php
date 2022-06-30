<?php

namespace App\Http\Controllers;

use App\Models\materialprestado;
use App\Http\Requests\StorematerialprestadoRequest;
use App\Http\Requests\UpdatematerialprestadoRequest;
use Illuminate\Http\Request;

class MaterialprestadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        $mat_prestado =  materialprestado::all();
        if($mat_prestado){
         echo 'Si existe payo';
         return response()->json($mat_prestado);
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
     * @param  \App\Http\Requests\StorematerialprestadoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store_(StorematerialprestadoRequest $request)
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
        materialprestado::create([
            'materialPrestado' => $request['materialPrestado'],
            'diaRetirada' => $request['diaRetirada'],
            'diaEntrega' => $request['diaEntrega'],
            'estadoMaterial' => $request['estadoMaterial'],
            'observaciones' => $request['observaciones'],
            'personaPrestamo' => $request['personaPrestamo'],
            'devuelto' => "false",
            'estado_devolucion' => $request['estado_devolucion'],
            'trabajador_presta' => $request['trabajador_presta'],
            'trabajador_recibe' => $request['trabajador_recibe'],
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\materialprestado  $materialprestado
     * @return \Illuminate\Http\Response
     */
    public function show(materialprestado $materialprestado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\materialprestado  $materialprestado
     * @return \Illuminate\Http\Response
     */
    public function edit(materialprestado $materialprestado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatematerialprestadoRequest  $request
     * @param  \App\Models\materialprestado  $materialprestado
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatematerialprestadoRequest $request, materialprestado $materialprestado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\materialprestado  $materialprestado
     * @return \Illuminate\Http\Response
     */
    public function destroy(materialprestado $materialprestado)
    {
        //
    }
}
