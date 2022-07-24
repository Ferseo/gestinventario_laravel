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
        $sonido = json_decode($request->getContent(), true);
        $sonidoCreated = sonido::create($sonido)->get();
      
        if($sonidoCreated){
            return response()->json(['response' => 'Insertado con éxito'], 200);
        }
        else{
            return response()->json(['response' => 'no funciona'], 200);
        }
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
    public function edit(Request $request,sonido $sonido)
    {
        $requestObj = $request->all();
        $code = $requestObj['codigo'];
        unset($requestObj['codigo']);
        $sonidoDB = sonido::where('codigo', $code)->update($requestObj);
        // return $sonidoDB;
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
