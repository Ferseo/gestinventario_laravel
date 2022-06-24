<?php

namespace App\Http\Controllers;

use App\Models\credenciales;
use App\Http\Requests\StorecredencialesRequest;
use App\Http\Requests\UpdatecredencialesRequest;

class CredencialesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        $credenciales = credenciales::all();
        if($credenciales){
            echo "si existe payo";
            return response()->json($credenciales);
        }else{
            echo "no existe";
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
     * @param  \App\Http\Requests\StorecredencialesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecredencialesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\credenciales  $credenciales
     * @return \Illuminate\Http\Response
     */
    public function show(credenciales $credenciales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\credenciales  $credenciales
     * @return \Illuminate\Http\Response
     */
    public function edit(credenciales $credenciales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecredencialesRequest  $request
     * @param  \App\Models\credenciales  $credenciales
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecredencialesRequest $request, credenciales $credenciales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\credenciales  $credenciales
     * @return \Illuminate\Http\Response
     */
    public function destroy(credenciales $credenciales)
    {
        //
    }
}
