<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
            $id = $request->dni->all();
            $payload = $request->payload->all();
            
            $userUpdated = User::where('dni', $id)->update($payload);
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
