<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    var_dump($request);
    return $request->user();
})->middleware('auth:sanctum');
