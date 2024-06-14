<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index'])->withoutMiddleware('auth');
Route::post('/store', [ProductController::class, 'store']);
Route::delete('/destroy', [ProductController::class, 'destroy']);
