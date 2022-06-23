<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtrezzoController;
use App\Http\Controllers\CableadoController;

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

// Route::prefix('api')->group(function() {
    // Route::get('atrezzo', 'AtrezzoController@getAll');
// }
// );
Route::controller(AtrezzoController::class)->group(function () {
    Route::get('/atrezzo', 'getAll');
});

Route::controller(CableadoController::class)->group(function () {
    Route::get('/cableado', 'getAll');
    Route::post('/cableado/store', 'store');
    
});
// Route::group([
//     'middleware' => 'cors',
//     'prefix'=>'api'
// ],function() {
//     Route::get('atrezzo', 'AtrezzoController@getAll');
// });   

