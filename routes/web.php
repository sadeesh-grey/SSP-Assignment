<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('web.index');
});
Route::get('/login', function () {
    return view('web.login');
});
Route::get('/register', function () {
    return view('web.register');
});
Route::post('/register', [UserController::class, 'userregister']);

Route::get('/allevents',[EventController::class,'allEvents']);
Route::get('/event/{category}',[EventController::class,'getEventsforCategory']);


Route::get('/comingup',[EventController::class,'comingup']);

Route::get('/login', function () {
    if (Auth::guard('web')->check()) {
        return redirect('/profile');
    } else {
        return view('web.login');
    }
})->name('login');
Route::post('/login', [UserController::class, 'login']);


Route::group(['middleware' => ['auth:web']], function () {
    Route::get('/profile', function(){
        return view('web.profile');
    });

    Route::get('/logout', [UserController::class, 'logout']);


});

Route::get('/',[EventController::class,'popularevents']);

// Route::get('/eventlist', function(){
//     return view('web.book');
// });
Route::get('/eventlist/{id}',[EventController::class,'eventDetails']);

// Route::post('/eventlist', [BookingController::class, 'bookevent']);


///////////admin/////////////////////
Route::get('/adminregister', function () {
    return view('admin.register');
});
Route::post('/adminregister', [AdminController::class, 'registeradmin']);

Route::get('/adminlogin', function () {
    if (Auth::guard('admin')->check()) {
        return redirect('/admin/index');
    } else {
        return view('admin.login');
    }
})->name('admin.login');
Route::post('/adminlogin', [AdminController::class, 'loginadmin']);

Route::group(['middleware' => ['auth:admin']], function () {

    Route::get('/admin/index', function () {
        return view('admin.index');
    });
    Route::post('/admin/index', [EventController::class, 'addevents']);

    Route::get('/adminlogout', [AdminController::class, 'logout']);



    Route::get('/admin/category', function () {
        return view('admin.category');
    });
    Route::post('/admin/category', [EventController::class, 'addcategories']);
    Route::get('/admin/index',[EventController::class,'category']);


    Route::post('/admin/update-name', [AdminController::class, 'updateName']);
    Route::post('/admin/update-password', [AdminController::class, 'updatePassword']);


});
