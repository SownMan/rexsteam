<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuestController;
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



Auth::routes();

Route::get('/', [App\Http\Controllers\GuestController::class, 'guessMenu'])->name('guessMenu');


Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth']], function(){
        Route::get('/', [AdminController::class, 'index'])->name('admin.home');
        Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
        Route::get('/manage', [AdminController::class, 'manageGame'])->name('admin.manage');
        Route::get('/add-game', [AdminController::class, 'addGameForm'])->name('admin.addform');
        Route::post('/add-game/add', [AdminController::class, 'AddGame'])->name('games.add');
        Route::get('/gameDetails/{id}', [AdminController::class, 'gameDetails'])->name('game.details');
});

Route::group(['prefix'=> 'user' , 'middleware' => ['isUser', 'auth']], function(){
    Route::get('/', [UserController::class, 'index'])->name('user.home');
    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('/gameDetails/{id}', [UserController::class, 'gameDetails'])->name('game.details');
    
});