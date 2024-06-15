<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;

Route::get('/', [ProductController::class, 'index']);
Route::post('/store', [ProductController::class, 'store']);
Route::delete('/destroy/{id}', [ProductController::class, 'destroy']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard/create', [DashboardController::class, 'create']);

