<?php

use App\Http\Controllers\Api\CarDestinationPriceController;
use App\Http\Controllers\Api\DestinationSearchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('destinations/search', DestinationSearchController::class)->name('destinations.search');
Route::get('cars/{car}/destinations/{destination}/price', CarDestinationPriceController::class)->name('car.destination.price');
