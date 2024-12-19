<?php

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

Route::prefix('auto')->group(function () {
    Route::get('', [\App\Http\Controllers\VehicleAdsController::class, 'index']);
    Route::get('{id}', [\App\Http\Controllers\VehicleAdsController::class, 'info']);
    Route::delete('{id}', [\App\Http\Controllers\VehicleAdsController::class, 'deleteById']);
});

Route::post('/login',[\App\Http\Controllers\AuthController::class, 'login']);
Route::post('/reg',[\App\Http\Controllers\AuthController::class, 'reg']);
