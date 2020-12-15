<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::apiResource('notas', App\Http\Controllers\API\NotificacionesController::class);
Route::apiResource('nota', App\Http\Controllers\API\NotaController::class);
