<?php

use App\Http\Controllers\MetasController;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [UserController::class, 'login']);
Route::post('/user', [UserController::class, 'store']);

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('/metas', MetasController::class);
    Route::apiResource('/tarefas',TarefaController::class);
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/{id}', [UserController::class, 'show']);
    Route::put('/user/{id}', [UserController::class, 'update']);
    Route::delete('/user/{id}', [UserController::class, 'destroy']);
});

