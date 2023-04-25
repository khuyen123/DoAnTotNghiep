<?php

use App\Http\Controllers\admin\basecontroller as AdminBasecontroller;
use App\Http\Controllers\admin\event\event_categorycontroller;
use App\Http\Controllers\admin\event\eventcontroller as EventEventcontroller;
use App\Http\Controllers\client\baseController;
use App\Http\Controllers\client\eventcontroller;
use App\Http\Controllers\client\loginController;
use Illuminate\Auth\Events\Login;
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
//Route without Login:
Route::post('/client/login/store',[loginController::class,'login_function'])->name('login_function');
Route::get('/client/login',[loginController::class,'login'])->name('login');
Route::get('/client/register',[loginController::class,'sigup'])->name('sigup');
Route::post('/client/register/store',[loginController::class,'sigup_function'])->name('sigup_function');
Route::get('/client/aboutus',[baseController::class,'aboutus'])->name('aboutus');
Route::get('client/event_detail',[eventcontroller::class,'eventdetail'])->name('event_detail');
Route::get('/',[baseController::class,'index'])->name('home');
Route::get('/client/events',[baseController::class,'events'])->name('client_events');

//Route with auth:
Route::middleware(['auth'])->group(function() {
    Route::get('client/logout',[loginController::class,'sigout'])->name('logout');
    //Client Route
    Route::prefix('client')->group( function() {
        
        Route::get('/register/active/{user}/{token}',[loginController::class,'active_account'])->name('active_account');
    });
    //Admin Route
    Route::group([
        'prefix' => 'admin',
        'middleware' => 'admin'
    ], function(){
        Route::get('/index',[AdminBasecontroller::class,'index'])->name('admin_index');
        Route::prefix('/categories')->group(function() {
           
            Route::get('/index',[event_categorycontroller::class,'index']);
            
        });
        Route::prefix('/event')->group(function(){
            Route::get('/index',[EventEventcontroller::class,'index']);
        });
    });
});



