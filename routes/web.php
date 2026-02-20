<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/menu', [MenuController::class, 'index']);

Route::get('/menu/create', [MenuController::class, 'create']);

Route::get('/menu/{menu}', [MenuController::class, 'show']);
