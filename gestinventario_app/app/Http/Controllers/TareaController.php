<?php

namespace App\Http\Controllers;


use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Muestra una lista de todas las tareas.

     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        $tarea = Tarea::all();
        if ($tarea) {
            echo "todo bien payo";
            return response()->json($tarea);
        } else {
            echo "no existe";
        }
    }

    /**
     * Crea un nuevo registro de tarea.
     *
     * @param Request $request
     * @return Response $response
     */
    public function store(Request $request)
    {
        try {

            $tarea = json_decode($request->getContent(), true);
            $tareaCreated = Tarea::create($tarea)->get();

            if ($tareaCreated) {
                return response()->json(['response' => 'Insertada la tarea con éxito.'], 200);
            } else {
                return response()->json(['response' => 'No se ha podido insertar la tarea.'], 400);
            }
        } catch (\Throwable $th) {
            return response()->json(['error' => 'Ha ocurrido el siguiente error al insertar la tarea: ' . $th->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarea  $tareas
     * @return \Illuminate\Http\Response
     */
    public function show(Tarea $tarea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Tarea $tareas)
    {
        $requestObj = $request->all();
        $code = $requestObj['id'];
        unset($requestObj['id']);
        $tareaDB = Tarea::where('id', $code)->update($requestObj);
        // return $tareaDB;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Tarea  $Tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarea $tarea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function delete(Tarea $tarea)
    {
        //
    }
}
