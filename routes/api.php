<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarModelController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RentalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json(['Chegamos até aqui!' => 'SIM']);
});

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::apiResource('cars', CarController::class);
Route::apiResource('brands', BrandController::class);
Route::apiResource('car_models', CarModelController::class);
Route::apiResource('customers', CustomerController::class);
Route::apiResource('rentals', RentalController::class);
