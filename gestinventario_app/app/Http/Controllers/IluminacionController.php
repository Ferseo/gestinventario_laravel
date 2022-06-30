<?php

namespace App\Http\Controllers;

use App\Models\iluminacion;
use App\Http\Requests\StoreiluminacionRequest;
use App\Http\Requests\UpdateiluminacionRequest;
use Illuminate\Http\Request;

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
    public function store_(StoreiluminacionRequest $request)
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
        iluminacion::create([
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
        //return response()->json(['response' => 'Insertado con éxito'], 200);
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
    public function update(UpdateiluminacionRequest $request, iluminacion $iluminacion, int $id)
    {
        //opcion 1
        // $data = $iluminacion::find($id);
        // $iluminacion->tipoMaterial = $request['tipoMaterial'];
        // $iluminacion->marca = $request['marca'];
        // $iluminacion->modelo = $request['modelo'];
        // $iluminacion->cantidad = $request['cantidad'];
        // $iluminacion->utilidad = $request['utilidad'];
        // $iluminacion->ubicacion = $request['ubicacion'];
        // $iluminacion->anioCompra = $request['anioCompra'];
        // $iluminacion->tipoConexion = $request['tipoConexion'];
        // $iluminacion->ultimaRevision = $request['ultimaRevision'];
        // $iluminacion->Observaciones = $request['Observaciones'];
        // $iluminacion->save();

        //opcion 2
        // iluminacion::where('codigo', $id)->update($request->all());

        //opcion 3
        // iluminacion::where('codigo', $id)->update(
        //     $iluminacion->tipoMaterial = $request['tipoMaterial'],
        //     $iluminacion->marca = $request['marca'],
        //     $iluminacion->modelo = $request['modelo'],
        //     $iluminacion->cantidad = $request['cantidad'],
        //     $iluminacion->utilidad = $request['utilidad'],
        //     $iluminacion->ubicacion = $request['ubicacion'],
        //     $iluminacion->anioCompra = $request['anioCompra'],
        //     $iluminacion->tipoConexion = $request['tipoConexion'],
        //     $iluminacion->ultimaRevision = $request['ultimaRevision'],
        //     $iluminacion->Observaciones = $request['Observaciones'],
        // );
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
