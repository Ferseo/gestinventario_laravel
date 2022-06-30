<?php

namespace App\Http\Controllers;

use App\Models\video;
use App\Http\Requests\StorevideoRequest;
use App\Http\Requests\UpdatevideoRequest;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        $video = video::all();
        if($video){
            echo "si existe payo";
            return response()->json($video);
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
     * @param  \App\Http\Requests\StorevideoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store_(StorevideoRequest $request)
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
        video::create([
            'tipoMaterial' => $request['tipoMaterial'],
            'marca' => $request['marca'],
            'modelo' => $request['modelo'],
            'cantidad' => $request['cantidad'],
            'utilidad' => $request['utilidad'],
            'ubicacion' => $request['ubicacion'],
            'anioCompra' => $request['anioCompra'],
            'tipoConexion' => $request['tipoConexion'],
            'ultimaRevision' => $request['ultimaRevision'],
            'Observaciones' => $request['Observaciones'],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatevideoRequest  $request
     * @param  \App\Models\video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatevideoRequest $request, video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(video $video)
    {
        //
    }
}
