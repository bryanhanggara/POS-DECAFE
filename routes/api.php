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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('/produk/store', [\App\Http\Controllers\ProdukController::class, 'store']);
// Route::put('/produk/update/{id)', [\App\Http\Controllers\ProdukController::class, 'update']);
Route::apiResource('/produk/', \App\Http\Controllers\ProdukController::class);
