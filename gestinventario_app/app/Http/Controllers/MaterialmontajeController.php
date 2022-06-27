<?php

namespace App\Http\Controllers;

use App\Models\materialmontaje;
use App\Http\Requests\StorematerialmontajeRequest;
use App\Http\Requests\UpdatematerialmontajeRequest;
use Illuminate\Http\Request;

class MaterialmontajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        $mat_montaje =  materialmontaje::all();
        if($mat_montaje){
         echo 'Si existe payo';
         return response()->json($mat_montaje);
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
     * @param  \App\Http\Requests\StorematerialmontajeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store_(StorematerialmontajeRequest $request)
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
        $mat_montaje = new MaterialMontaje;
        $mat_montaje->tipoMaterial = $data['tipoMaterial'];
        $mat_montaje->cantidad = $data['cantidad'];
        $mat_montaje->utilidad = $data['utilidad'];
        $mat_montaje->ubicacion = $data['ubicacion'];
        $mat_montaje->observaciones = $data['observaciones'];
        $mat_montaje->save();
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\materialmontaje  $materialmontaje
     * @return \Illuminate\Http\Response
     */
    public function show(materialmontaje $materialmontaje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\materialmontaje  $materialmontaje
     * @return \Illuminate\Http\Response
     */
    public function edit(materialmontaje $materialmontaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatematerialmontajeRequest  $request
     * @param  \App\Models\materialmontaje  $materialmontaje
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatematerialmontajeRequest $request, materialmontaje $materialmontaje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\materialmontaje  $materialmontaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(materialmontaje $materialmontaje)
    {
        //
    }
}
