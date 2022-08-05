<?php

namespace App\Http\Controllers;

use App\Models\MaterialPrestado;
use App\Http\Requests\StorematerialprestadoRequest;
use App\Http\Requests\UpdatematerialprestadoRequest;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
 
RateLimiter::for('global', function (Request $request) {
    return Limit::perMinute(1000);
});

class MaterialprestadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        $mat_prestado =  materialprestado::all();
        if($mat_prestado){
         echo 'Si existe payo';
         return response()->json($mat_prestado);
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
     * @param  \App\Http\Requests\StorematerialprestadoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store_(StorematerialprestadoRequest $request)
    {
        //
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request){
            try {
            $material_prestado = $request->all();
            $material_prestado['devuelto']="false";
            
            $materialDb = Material::where('id', $material_prestado['materials_id'])->firstOrFail();
            if($materialDb){
                return $material_prestado;
                $response = MaterialPrestado::create($material_prestado)->get();
                if($response){
                    return response()->json(["response" => "Se ha prestado el material."], 201);
                } else {
                    return response()->json(["error" => "No se ha podido prestar el material."], 400);
                }
                
            }else {
                return response()->json(["error"=> "Ha ocurrido un error."], 500);
            }
        } catch (\Throwable $th) {
            return response()->json(["error"=> "Ha ocurrido el siguiente error: ".$th], 500);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\materialprestado  $materialprestado
     * @return \Illuminate\Http\Response
     */
    public function show(materialprestado $materialprestado)
    {
        //
    }

  /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\credenciales  $credenciales
     * @return \Illuminate\Http\Response
     */

    public function edit(Request $request)
    {
        try {
            $id = $request->id->all();
            $payload = $request->payload->all();
            
            $userUpdated = materialprestado::where('id', $id)->update($payload);
            if($userUpdated){
                return response()->json(["response" => "El usuario ha sido modificado."], 201);
            } else {
                return response()->json(["error" => "El usuario no ha podido modificarse."], 400);
    
            }
        } catch (\Throwable $th) {
            return response()->json(["error"=> "Ha ocurrido el siguiente error: ".$th], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatematerialprestadoRequest  $request
     * @param  \App\Models\materialprestado  $materialprestado
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatematerialprestadoRequest $request, materialprestado $materialprestado)
    {
        //
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @param materialprestado $materialprestado
     * @return 
     */
    public function delete(Request $request, materialprestado $materialprestado){
        $requestObj = $request->all();
        $code = $requestObj['id'];
        unset($requestObj['id']);
        $mat_prestadoDB = materialprestado::where('id', $code)->update($requestObj['devuelto'] = "true");
        return $mat_prestadoDB;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\materialprestado  $materialprestado
     * @return \Illuminate\Http\Response
     */
    public function destroy(materialprestado $materialprestado)
    {
        //
    }
}
