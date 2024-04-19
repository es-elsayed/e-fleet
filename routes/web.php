<?php

use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

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

Route::get('/', HomeController::class)->name('home');

Route::get('/change-locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    Session::save();
    App::setLocale($locale);
    redirect(request()->url());
})->name('change-locale');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
});
