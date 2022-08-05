<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Muestra una lista de todos los materiales.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        try {

            $material =  Material::all();

            if ($material) {
                return response()->json($material);
            } else {
                return response()->json(['notFound' => 'No se han encontrado materiales'], 400);
            }
        } catch (\Throwable $th) {
            return response()->json(['error' => 'Ha ocurrido el siguiente error al obtener los materiales: ' . $th->getMessage()], 500);
        }
    }


    /**
     * Crea un nuevo material.
     *
     * @param Request $material
     * @return void
     */
    public function store(Request $material)
    {
        try {

            $material = $material->all();

            $materialCreated = Material::create($material)->get();

            if ($materialCreated) {
                return response()->json(['response' => 'Se ha creado el material con éxito.'], 200);
            } else {
                return response()->json(['error' => 'No se ha podido crear el material.'], 400);
            }
        } catch (\Throwable $th) {
            return response()->json(['error' => 'Ha ocurrido el siguiente error al crear el material: ' . $th->getMessage()], 500);
        }
    }

    /**
     * TODO: Este metodo puede servir para ver en detalle cierto material, si fuera el caso.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function show(Material $material)
    {
        //
    }

    /**
     * Actualiza un material.
     *
     * @param  \App\Models\Material  $request -> ejemplo de Request: {"id": 1, "payload": {"categoria": "Iluminacion", "marca": "marca"...} }
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {

            $requestObj = $request->all();
            $id = $requestObj['id']; // id del material a editar
            $material = $requestObj['payload']; // información del material a editar

            $materialUpdated = Material::where('id', $id)->update($material);

            if ($materialUpdated) {
                return response()->json(['response' => 'Se ha actualizado el material con éxito.'], 200);
            } else {
                return response()->json(['error' => 'No se ha podido actualizar el material.'], 400);
            }
        } catch (\Throwable $th) {

            return response()->json(['error' => 'Ha ocurrido el siguiente error al actualizar el material: ' . $th->getMessage()], 500);
        }
    }

    /**
     * Elimina el material especificado por el id.
     *
     * @param  Request  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $id)
    {
        try {

            $id = $id->all(); // solo debería de traer un parametro "id"

            $result = Material::where('id', $id)->delete();
    
            if ($result) {
                return response()->json(['response' => 'Se ha eliminado el material con éxito.'], 200);
            } else {
                return response()->json(['error' => 'No se ha podido eliminar el material.'], 400);
            }
        } catch (\Throwable $th) {
            return response()->json(['error' => 'Ha ocurrido el siguiente error al eliminar el material: ' . $th->getMessage()], 500);
        }
       
    }
}
