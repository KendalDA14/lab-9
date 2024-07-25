<?php

use App\Http\Controllers\api\controllerSuma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

route:: get('/sumar/{num1}/{num2}',[controllerSuma::class, 'suma']);
route:: get('/multiplicar/{num1}/{num2}',[controllerSuma::class, 'multiplicar']);

