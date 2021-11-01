<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
//use App\Http\Controllers\MailController;
//use App\Http\Controllers\Auth;
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
    return view('welcome');
});
Route::group(['middleware' => 'auth'], function (){
    Route::get('/display', [UserController::class, 'index']);
    Route::get('/view/{id}', [UserController::class, 'view']);
    Route::get('/select/{id}', [UserController::class, 'select']);
    Route::get('/reject/{id}', [UserController::class, 'reject']);
});

Route::get('/user-register', [UserController::class,'create']);
Route::post('/user-register', [UserController::class,'store']);


//Route::get('/admin', [AdminController::class,'create']);

Auth::routes(['register' => false]);
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/main',[MainController::class,'index']);
// Route::post('/main/checklogin',[MainController::class,'checklogin']);
// Route::get('/main/successlogin',[MainController::class,'successlogin']);
// Route::get('/main/logout',[MainController::class,'logout']);

// Route::post('/main/checklogin', 'MainController@checklogin');
// Route::get('main/successlogin', 'MainController@successlogin');
// Route::get('main/logout', 'MainController@logout');


//Route::get('/send-email',[MailController::class,'sendEmail']);

// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('login', 'Auth\LoginController@login');
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');



