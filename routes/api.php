<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\MotorDefectController;
use App\Http\Controllers\MotorDetailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputDataController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:sanctum'], function() {
    Route::get('/input_data', [InputDataController::class, 'index']);
    Route::get('input_data/{id}', [InputDataController::class, 'show']);
    Route::post('/input_data', [InputDataController::class, 'store']);
    Route::delete('input_data/{id}', [InputDataController::class, 'delete']);
    Route::put('input_data/{id}', [InputDataController::class, 'update']);

    Route::post('/add_file', [FileController::class, 'store']);
});

Route::group(['namespace' => 'Motor', 'prefix' => 'motor'], function (){
    Route::get('/details/index', [MotorDetailController::class, 'index']);
    Route::get('/defects/index', [MotorDefectController::class, 'index']);
    Route::get('/get_file', [MotorDefectController::class, 'getImage']);
});

Route::post('/test', [FileController::class, 'storeTest']);

