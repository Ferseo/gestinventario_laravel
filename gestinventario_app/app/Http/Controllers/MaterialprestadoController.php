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
        $material_prestado = json_decode($request->getContent(), true);
        $material_prestadoCreated = materialprestado::create($material_prestado)->get();
      
        if($material_prestadoCreated){
            return response()->json(['response' => 'Insertado con éxito'], 200);
        }
        else{
            return response()->json(['response' => 'no funciona'], 200);
        }
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
    public function edit(Request $request, materialprestado $materialprestado)
    {
        $requestObj = $request->all();
        $code = $requestObj['codigo'];
        unset($requestObj['codigo']);
        $mat_prestadoDB = materialprestado::where('codigo', $code)->update($requestObj);
        // return $mat_prestadoDB;
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
