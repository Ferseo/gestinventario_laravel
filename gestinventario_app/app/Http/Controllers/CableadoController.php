<?php

namespace App\Http\Controllers;

use App\Models\Cableado;
use App\Http\Requests\StoreCableadoRequest;
use App\Http\Requests\UpdateCableadoRequest;
use Illuminate\Http\Request;

class CableadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
       $cableado =  Cableado::all();
       if($cableado){
        echo 'Si existe payo';
        return response()->json($cableado);
       }else{
        echo 'no gilipollas';
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCableadoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCableadoRequest $request)
    {
        
        $cableado =  Cableado::create($request);
        if($cableado){
         echo 'Si existe payo';
         return response()->json($cableado);
        }else{
         echo 'no gilipollas';
     }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cableado  $cableado
     * @return \Illuminate\Http\Response
     */
    public function show(Cableado $cableado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cableado  $cableado
     * @return \Illuminate\Http\Response
     */
    public function edit(Cableado $cableado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCableadoRequest  $request
     * @param  \App\Models\Cableado  $cableado
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCableadoRequest $request, Cableado $cableado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cableado  $cableado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cableado $cableado)
    {
        //
    }
}
