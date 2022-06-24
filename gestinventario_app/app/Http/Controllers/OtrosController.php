<?php

namespace App\Http\Controllers;

use App\Models\otros;
use App\Http\Requests\StoreotrosRequest;
use App\Http\Requests\UpdateotrosRequest;

class OtrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        $otros =  otros::all();
        if($otros){
         echo 'Si existe payo';
         return response()->json($otros);
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
     * @param  \App\Http\Requests\StoreotrosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreotrosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\otros  $otros
     * @return \Illuminate\Http\Response
     */
    public function show(otros $otros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\otros  $otros
     * @return \Illuminate\Http\Response
     */
    public function edit(otros $otros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateotrosRequest  $request
     * @param  \App\Models\otros  $otros
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateotrosRequest $request, otros $otros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\otros  $otros
     * @return \Illuminate\Http\Response
     */
    public function destroy(otros $otros)
    {
        //
    }
}
