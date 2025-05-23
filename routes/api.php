<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\OrderController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// register
Route::post('/register', [AuthController::class, 'register']);

//login
Route::post('/login', [AuthController::class, 'login']);

//logout
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// edit profile
Route::put('/profile', [ProfileController::class, 'updateProfile']);

//products
Route::apiResource('/api-products', ProductController::class)->middleware('auth:sanctum');
//categories
Route::apiResource('/api-categories', CategoryController::class)->middleware('auth:sanctum');
Route::get('/api-categories/{id}', [CategoryController::class, 'show'])->middleware('auth:sanctum');


//orders
Route::post('/api-orders', [OrderController::class, 'store'])->middleware('auth:sanctum');
