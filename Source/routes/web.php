<?php

use App\Http\Controllers\Client\homeController;
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
Route::prefix('client')->group( function() {
    Route::get('/index',[homeController::class,'index'])->name('client_index');
    Route::get('/events',[homeController::class,'client_events'])->name('client_events');
    Route::get('/creator',[homeController::class,'creator'])->name('creator');
    Route::get('/aboutus',[homeController::class,'aboutus'])->name('aboutus');
});
Route::get('/',[homeController::class,'index']);
