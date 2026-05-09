<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ProductoController,
    ProductoCategoriaController
};

Route::get('/', function (Request $request) {
    return 'hola';
});
Route::apiResource('productos', ProductoController::class);
Route::apiResource('categorias', ProductoCategoriaController::class);
