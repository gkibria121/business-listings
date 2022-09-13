<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\ListingsController;
use App\Http\Controllers\DashboardController;


Route::get('/', [ListingsController::class, 'index']);
Route::resource('listings', ListingsController::class);


Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index']);
