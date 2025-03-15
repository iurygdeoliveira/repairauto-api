<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarUserController;
use App\Http\Controllers\RepairShopController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login'])
    ->middleware(['throttle:10,1'])
    ->name('login');

Route::post('/register', [AuthController::class, 'register'])
    ->middleware(['throttle:10,1'])
    ->name('register');

Route::post('/logout', [AuthController::class, 'register'])
    ->middleware(['throttle:10,1', 'auth:sanctum'])
    ->name('logout');

// Route::group(["middleware" => ["auth:sanctum"]], function () {
//     Route::apiResource('brands', BrandController::class);
//     Route::apiResource('cars', CarController::class);
//     Route::apiResource('car-user', CarUserController::class);
//     Route::apiResource('repair-shop', RepairShopController::class);
// });
