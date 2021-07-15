<?php

use Illuminate\Support\Facades\Route;

// use Controller Auth
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

// Use Controller Admin
use App\Http\Controllers\Backend\AdminController;

// Use Controller User
use App\Http\Controllers\Frontend\UserController;


Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::get('register', [AuthController::class, 'formRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    // route backend admin
    Route::group(['middleware' => 'admin'], function () {
        Route::get('admin', [AdminController::class, 'index'])->name('admin');
    });

    // route frontend user
    Route::group(['middleware' => 'user'], function () {
        Route::get('user', [UserController::class, 'index'])->name('user');
    });
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
 
});
