<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

Route::get('/rozmanowski/53873/people/all', [PersonController::class, 'index']);
Route::get('/rozmanowski/53873/people/{id}', [PersonController::class, 'show']);
Route::post('/rozmanowski/53873/people/store', [PersonController::class, 'store']);
Route::put('/rozmanowski/53873/people/{id}', [PersonController::class, 'update']);
Route::delete('/rozmanowski/53873/people/destroy/{id}', [PersonController::class, 'destroy']);
