<?php

use App\Http\Controllers\TevekenysegekController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/tevekenysegek', [TevekenysegekController::class,'index']);
Route::get('/tevekenysegek/kategoria/{id}', [TevekenysegekController::class,'show']);
Route::post('/tevekenyseg', [TevekenysegekController::class,'store']);
Route::delete('/tevekenyseg/{id}', [TevekenysegekController::class,'destroy']);
Route::put('/tevekenyseg/{id}', [TevekenysegekController::class,'update']);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
