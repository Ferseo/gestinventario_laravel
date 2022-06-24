<?php

namespace App\Http\Controllers;

use App\Models\iluminacion;
use App\Http\Requests\StoreiluminacionRequest;
use App\Http\Requests\UpdateiluminacionRequest;

class IluminacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        $iluminacion =  iluminacion::all();
        if($iluminacion){
         echo 'Si existe payo';
         return response()->json($iluminacion);
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
     * @param  \App\Http\Requests\StoreiluminacionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreiluminacionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\iluminacion  $iluminacion
     * @return \Illuminate\Http\Response
     */
    public function show(iluminacion $iluminacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\iluminacion  $iluminacion
     * @return \Illuminate\Http\Response
     */
    public function edit(iluminacion $iluminacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateiluminacionRequest  $request
     * @param  \App\Models\iluminacion  $iluminacion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateiluminacionRequest $request, iluminacion $iluminacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\iluminacion  $iluminacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(iluminacion $iluminacion)
    {
        //
    }
}
