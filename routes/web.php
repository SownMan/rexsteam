<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Models\User;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth']], function(){
        Route::get('/home', [AdminController::class, 'index'])->name('admin.home');
        Route::get('/prolfe', [AdminController::class, 'index'])->name('admin.profile');
        Route::get('/settings', [AdminController::class, 'index'])->name('admin.settings');
});

Route::group(['prefix'=> 'user' , 'middleware' => ['isUser', 'auth']], function(){
    Route::get('/home', [UserController::class, 'index'])->name('user.home');
    Route::get('/profile', [UserController::class, 'index'])->name('user.profile');
    Route::get('/settings', [UserController::class, 'index'])->name('user.settings');
});