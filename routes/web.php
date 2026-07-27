<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\MuridController::class, 'index']);

Route::get('/add', [App\Http\Controllers\MuridController::class, 'add']);
Route::post('/murid', [App\Http\Controllers\MuridController::class, 'store']);
Route::get('/absen' , [App\Http\Controllers\MuridController::class, 'absen']);