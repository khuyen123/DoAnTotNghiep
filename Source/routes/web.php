<?php

use App\Http\Controllers\client\baseController;
use App\Http\Controllers\client\loginController;

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


Route::get('/',[baseController::class,'index'])->name('home');
Route::prefix('client')->group( function() {
    // Route::get('/index',[homeController::class,'index'])->name('home');
    Route::post('/login/store',[loginController::class,'login_function'])->name('login_function');
    Route::get('/login',[loginController::class,'login'])->name('login');
    Route::get('/register',[loginController::class,'sigup'])->name('sigup');
    Route::get('/events',[baseController::class,'events'])->name('client_events');
    Route::get('/creator',[baseController::class,'creator'])->name('creator');
    Route::get('/aboutus',[baseController::class,'aboutus'])->name('aboutus');
    Route::get('/logout',[loginController::class,'sigout'])->name('logout');
});

