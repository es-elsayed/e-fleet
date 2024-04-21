<?php

use App\Http\Controllers\ListCarController;
use App\Http\Controllers\Site\ContactUsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('contact_us', ContactUsController::class)->only('create', 'store');
Route::resource('cars', ListCarController::class);
Route::get('search', function (){
    return 'hi search';
});
