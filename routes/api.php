<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarModelController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RentalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('car', [CarController::class]);
Route::apiResource('brand', [BrandController::class]);
Route::apiResource('car_model', [CarModelController::class]);
Route::apiResource('customer', [CustomerController::class]);
Route::apiResource('rental', [RentalController::class]);
