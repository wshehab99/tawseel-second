<?php

use App\Http\Controllers\Api\OrdersController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/products/{id}', [ProductController::class, 'show']);
Route::get('/orders', [OrdersController::class, 'userCompletedOrders']);
Route::post('register', [RegisterController::class, 'register']);
