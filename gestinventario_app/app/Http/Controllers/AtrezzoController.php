<?php

namespace App\Http\Controllers;

use App\Models\atrezzo;
use App\Http\Requests\StoreatrezzoRequest;
use App\Http\Requests\UpdateatrezzoRequest;

class AtrezzoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
       $atrezzo =  Atrezzo::all();
       if($atrezzo){
        echo 'Si existe payo';
        return response()->json($atrezzo);
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreatrezzoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreatrezzoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\atrezzo  $atrezzo
     * @return \Illuminate\Http\Response
     */
    public function show(atrezzo $atrezzo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\atrezzo  $atrezzo
     * @return \Illuminate\Http\Response
     */
    public function edit(atrezzo $atrezzo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateatrezzoRequest  $request
     * @param  \App\Models\atrezzo  $atrezzo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateatrezzoRequest $request, atrezzo $atrezzo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\atrezzo  $atrezzo
     * @return \Illuminate\Http\Response
     */
    public function destroy(atrezzo $atrezzo)
    {
        //
    }
}
