<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChickDataController;

Route::post('/chick-data', [ChickDataController::class, 'store']);
Route::get('/chick-data', [ChickDataController::class, 'index']); // untuk realtime

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
