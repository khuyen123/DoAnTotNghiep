<?php

use App\Http\Controllers\admin\basecontroller as AdminBasecontroller;
use App\Http\Controllers\admin\category\categoryController;
use App\Http\Controllers\admin\event\event_categorycontroller;
use App\Http\Controllers\admin\event\event_detailcontroller;
use App\Http\Controllers\admin\event\event_imagecontroller;
use App\Http\Controllers\admin\event\eventcontroller;
use App\Http\Controllers\admin\banner\bannerController;
use App\Http\Controllers\admin\titket\titketController as admintitketController;
use App\Http\Controllers\client\eventcontroller as clienteventcontroller;
use App\Http\Controllers\admin\user\usercontroller;
use App\Http\Controllers\client\baseController;
use App\Http\Controllers\client\loginController;
use App\Http\Controllers\client\titketController;
use App\Models\event_image;
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
Route::get('/client/event_detail/{detail_id}',[clienteventcontroller::class,'eventdetail'])->name('event_detail');
Route::get('/',[baseController::class,'index'])->name('home');
Route::get('/client/events',[baseController::class,'events'])->name('client_events');
Route::get('/getdistrict/{province_id}',[baseController::class,'getdistrict']);
Route::get('/getwards/{district_id}',[baseController::class,'getwards']);
Route::get('/finddistrict/{ward_id}',[baseController::class,'findprovince']);

//Route with auth:
Route::middleware(['auth'])->group(function() {
    Route::get('client/logout',[loginController::class,'sigout'])->name('logout');
    //Client Route
    Route::prefix('client')->group( function() {
        Route::get('/infor/{user_id}',[baseController::class,'client_infor']);
        Route::get('/register/active/{user}/{token}',[loginController::class,'active_account'])->name('active_account');
        ROute::post('/event_detail/{detail_id}/titket/index',[titketController::class,'index']);
    });
    Route::prefix('titket')->group(function(){
        Route::post('/create',[titketController::class,'titket_create']);
    });
    //Admin Route
    Route::group([
        'prefix' => 'admin',
        'middleware' => 'admin'
    ], function(){
        Route::get('/index',[AdminBasecontroller::class,'index'])->name('admin_index');
        Route::prefix('/categories')->group(function() {
           
            Route::get('/index',[event_categorycontroller::class,'index']);
            Route::get('/find/{id}',[event_categorycontroller::class,'find']);
            Route::post('/edit/{id}',[event_categorycontroller::class,'edit_store']);
            Route::post('/create',[event_categorycontroller::class,'create_category']);
            Route::delete('/delete/{id}',[event_categorycontroller::class,'deleteOneCategory']);
            Route::delete('/deleteMany',[event_categorycontroller::class,'deleteManyCategory']);
            Route::get('/getall',[event_categorycontroller::class,'getall']);
        });
        Route::prefix('/event')->group(function(){
            Route::get('/index',[eventcontroller::class,'index']);
            Route::post('/create',[eventcontroller::class,'create_store']);
            Route::get('/find/{id}',[eventcontroller::class,'find']);
            Route::post('/edit/{id}',[eventcontroller::class,'edit_store']);
            Route::delete('/delete/{id}',[eventcontroller::class,'deleteOneevent']);
            Route::delete('/deleteMany',[eventcontroller::class,'deleteManyEvent']);
        });
        Route::prefix('event_detail/{id_sukien}')->group(function(){
            Route::get('/index',[event_detailcontroller::class,'index']);
            Route::get('/create',[event_detailcontroller::class,'create_index']);
            Route::post('/create/store',[event_detailcontroller::class,'create_store']);
            Route::get('/edit/{eventdetail_id}',[event_detailcontroller::class,'edit_index']);
            Route::post('/edit/{eventdetail_id}',[event_detailcontroller::class,'edit_store']);
            route::delete('/delete/{eventdetail_id}',[event_detailcontroller::class,'delete']);
            Route::post('/edit/closeevent/{eventdetail_id}',[event_detailcontroller::class,'close']);
        });
        Route::prefix('/event_image')->group(function(){
            Route::get('/index',[event_imagecontroller::class,'index']);
            Route::get('/create',[event_imagecontroller::class,'create']);
            Route::post('create',[event_imagecontroller::class,'store']);
            Route::delete('/delete/{image_id}',[event_imagecontroller::class,'delete']);
        });
        Route::prefix('user')->group(function(){
            Route::get('/index',[usercontroller::class,'index']);
            Route::get('/edit/{user_id}',[usercontroller::class,'edit']);
            Route::POST('/edit/lock_user/{user_id}',[usercontroller::class,'edit_store']);
            Route::POST('/edit/unlock_user/{user_id}',[usercontroller::class,'edit_store']);
            Route::POST('/edit/changerole/{user_id}',[usercontroller::class,'edit_store']);
            Route::delete('/delete/{user_id}',[usercontroller::class,'deleteuser']);
        });
        Route::prefix('banner')->group(function(){
            Route::get('/index',[bannerController::class,'index']);
            Route::get('/create',[bannerController::class,'create']);
            Route::post('create',[bannerController::class,'store']);
            Route::delete('/delete/{banner_id}',[bannerController::class,'delete']);
        });
        Route::prefix('titket')->group(function(){
            Route::get('/index',[admintitketController::class,'index']);
            Route::post('/index',[admintitketController::class,'search']);
            Route::post('/checkin/{titket_id}',[admintitketController::class,'checkin']);
            Route::get('/print_titket/{titket_id}',[admintitketController::class,'export_titket']);
        });
    });
});



