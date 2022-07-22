<?php

namespace App\Http\Controllers;

use App\Models\Cableado;
use App\Http\Requests\StoreCableadoRequest;
use App\Http\Requests\UpdateCableadoRequest;
use Illuminate\Http\Request;
use Nette\Utils\Json;

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
        return response()->json($cableado);
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
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCableadoRequest
     * @return \Illuminate\Http\Response
     */
    public function store_(StoreCableadoRequest $request){


    }
   

    /**
     * Undocumented function
     * @param  \App\Http\Requests\Request  $request
     * @param Request $request
     * @return void
     */
    public function store(Request $request){
        $cableado = json_decode($request->getContent(), true);
        $cableadoCreated = Cableado::create($cableado)->get();
      
        if($cableadoCreated){
            return response()->json(['response' => 'Insertado con éxito'], 200);
        }
        else{
            return response()->json(['response' => 'no funciona'], 200);
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
