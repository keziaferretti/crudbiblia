<?php

use App\Http\Controllers\LivroController;
use App\Http\Controllers\TestamentoController;
use App\Http\Controllers\VersiculoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/testamento', TestamentoController::class);

Route::apiResource('/livro', LivroController::class);

Route::apiResource('/versiculo', VersiculoController::class);


