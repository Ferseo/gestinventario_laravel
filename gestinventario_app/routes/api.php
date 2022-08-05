<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtrezzoController;
use App\Http\Controllers\CableadoController;
use App\Http\Controllers\CredencialesController;
use App\Http\Controllers\IluminacionController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\MaterialmontajeController;
use App\Http\Controllers\MaterialprestadoController;
use App\Http\Controllers\OtrosController;
use App\Http\Controllers\SonidoController;
use App\Http\Controllers\TareasController;
use App\Http\Controllers\VideoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(MaterialController::class)->group(function () {
    Route::get('/material', 'getAll');   
    Route::post('/material/store', 'store'); 
    Route::put('/material/edit', 'edit');    
});


Route::controller(MaterialprestadoController::class)->group(function () {
    Route::get('/materialprestado', 'getAll');
    Route::post('/materialprestado/create', 'store'); 
    Route::put('/materialprestado/edit', 'edit');
    Route::put('/materialprestado/delete', 'delete');   
});


Route::controller(TareasController::class)->group(function () {
    Route::get('/tareas', 'getAll');
    Route::post('/tareas/store', 'store');
    Route::put('/tareas/edit', 'edit');    
});

Route::controller(CredencialesController::class)->group(function () {
    Route::get('/credenciales', 'getAll');
    Route::post('/credenciales/store', 'store');
    Route::put('/credenciales/edit', 'edit');
});