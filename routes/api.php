<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataPengirimanController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/shipments',[DataPengirimanController::class, 'index']);
Route::post('/shipments',[DataPengirimanController::class, 'store']);
