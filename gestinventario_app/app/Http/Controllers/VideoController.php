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
        $video = json_decode($request->getContent(), true);
        $videoCreated = video::create($video)->get();
      
        if($videoCreated){
            return response()->json(['response' => 'Insertado con éxito'], 200);
        }
        else{
            return response()->json(['response' => 'no funciona'], 200);
        }
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
