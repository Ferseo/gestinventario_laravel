<?php

namespace App\Http\Controllers;

use App\Models\tareas;
use App\Http\Requests\StoretareasRequest;
use App\Http\Requests\UpdatetareasRequest;
use Illuminate\Http\Request;

class TareasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        $tareas = tareas::all();
        if($tareas){
            echo "todo bien payo";
            return response()->json($tareas);
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
     * @param  \App\Http\Requests\StoretareasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store_(StoretareasRequest $request)
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
        $tarea = new tareas;
        $tarea->tipoTarea = $data['tipoTarea'];
        $tarea->trabajadorDesempenia = $data['trabajadorDesempenia'];
        $tarea->diaTarea = $data['diaTarea'];
        $tarea->horarioTarea = $data['horarioTarea'];
        $tarea->lugarTarea = $data['lugarTarea'];
        $tarea->realizada = "false";
        $tarea->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tareas  $tareas
     * @return \Illuminate\Http\Response
     */
    public function show(tareas $tareas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tareas  $tareas
     * @return \Illuminate\Http\Response
     */
    public function edit(tareas $tareas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetareasRequest  $request
     * @param  \App\Models\tareas  $tareas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetareasRequest $request, tareas $tareas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tareas  $tareas
     * @return \Illuminate\Http\Response
     */
    public function destroy(tareas $tareas)
    {
        //
    }
}
