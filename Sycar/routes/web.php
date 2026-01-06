<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ClientesController;

Route::get('/', [ClientesController::class, 'index']);
Route::get('/Crear', [ClientesController::class, 'Crear']);
Route::post('/Guardar', [ClientesController::class, 'Guardar']);
Route::get('/Editar/{id}', [ClientesController::class, 'editar']);
Route::put('/Actualizar/{id}', [ClientesController::class, 'actualizar']);
Route::delete('/Eliminar/{id}', [ClientesController::class, 'eliminar']);
