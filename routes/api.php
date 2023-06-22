<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// rota para não autenticados
Route::get('/', function () {
    return response()->json([
        'esteRota' => true
    ]);
});

// PRODUTOS
Route::get('/produtos', [\App\Http\Controllers\ProdutosController::class, 'index']);
Route::post('/produtos', [\App\Http\Controllers\ProdutosController::class, 'store']);
Route::get('/produtos/{id}', [\App\Http\Controllers\ProdutosController::class, 'show']);
Route::post('/produtos/{id}', [\App\Http\Controllers\ProdutosController::class, 'update']);
Route::delete('/produtos/{id}', [\App\Http\Controllers\ProdutosController::class, 'destroy']);
Route::get('/delprod/{id}', [\App\Http\Controllers\ProdutosController::class, 'destroy']);

// vendas
Route::get('/vendas', [\App\Http\Controllers\VendasController::class, 'index']);
Route::post('/carts', [\App\Http\Controllers\VendasController::class, 'store']);


// rotas para quem está autenticado
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
