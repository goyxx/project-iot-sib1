<?php

use App\Http\Controllers\Api\HumiditiesController;
use App\Http\Controllers\Api\IntensitiesController;
use App\Http\Controllers\Api\MoisturesController;
use App\Http\Controllers\Api\SensorController;
use App\Http\Controllers\Api\TemperatureController;
use App\Models\Humidities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/temperatures', [TemperatureController::class, 'store']);
Route::put('/temperatures/{id}', [TemperatureController::class, 'update']);
Route::get('/temperatures/{id}  ', [TemperatureController::class, 'show']);
Route::get('/temperatures', [TemperatureController::class, 'index']);

Route::post('/humidities', [HumiditiesController::class, 'store']);
Route::put('/humidities/{id}', [HumiditiesController::class, 'update']);
Route::get('/humidities/{id}  ', [HumiditiesController::class, 'show']);
Route::get('/humidities', [HumiditiesController::class, 'index']);

Route::post('/sensors', [SensorController::class, 'store']);
Route::put('/sensors/{id}', [SensorController::class, 'update']);
Route::get('/sensors/{id}  ', [SensorController::class, 'show']);
Route::get('/sensors', [SensorController::class, 'index']);

Route::apiResource('temperatures', TemperatureController::class);
Route::apiResource('humidities', HumiditiesController::class);
Route::apiResource('moistures', MoisturesController::class);
Route::apiResource('intensities', IntensitiesController::class);
Route::apiResource('sensors', SensorController::class);
