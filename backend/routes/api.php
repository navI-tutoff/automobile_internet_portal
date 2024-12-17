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

Route::get('/auto', [\App\Http\Controllers\VehicleAdsController::class, 'index']);
Route::get('/auto/{id}', [\App\Http\Controllers\VehicleAdsController::class, 'info']);

// Route::get('/login',[\App\Http\Controllers\AuthController::class, 'login'] )