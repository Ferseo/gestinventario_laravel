<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtrezzoController;
use App\Http\Controllers\CableadoController;
use App\Http\Controllers\CredencialesController;
use App\Http\Controllers\IluminacionController;
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

Route::controller(AtrezzoController::class)->group(function () {
    Route::get('/atrezzo', 'getAll');
    Route::post('/atrezzo/store', 'store');
});

Route::controller(CableadoController::class)->group(function () {
    Route::get('/cableado', 'getAll');
    Route::post('/cableado/store', 'store');
});

Route::controller(IluminacionController::class)->group(function () {
    Route::get('/iluminacion', 'getAll');
    Route::post('/iluminacion/store', 'store');
    Route::post('/iluminacion/update', 'update');    
});

Route::controller(MaterialmontajeController::class)->group(function () {
    Route::get('/materialmontaje', 'getAll');   
    Route::post('/materialmontaje/store', 'store');     
});

Route::controller(MaterialprestadoController::class)->group(function () {
    Route::get('/materialprestado', 'getAll');
    Route::post('/materialprestado/store', 'store');    
});

Route::controller(OtrosController::class)->group(function () {
    Route::get('/otros', 'getAll');
    Route::post('/otros/store', 'store');    
});

Route::controller(SonidoController::class)->group(function () {
    Route::get('/sonido', 'getAll'); 
    Route::post('/sonido/store', 'store');   
});

Route::controller(TareasController::class)->group(function () {
    Route::get('/tareas', 'getAll');
    Route::post('/tareas/store', 'store');    
});

Route::controller(VideoController::class)->group(function () {
    Route::get('/video', 'getAll');  
    Route::post('/video/store', 'store');  
});

Route::controller(CredencialesController::class)->group(function () {
    Route::get('/credenciales', 'getAll');
    Route::post('/credenciales/store', 'store');
});