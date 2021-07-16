<?php

use Illuminate\Support\Facades\Route;

// use Controller Auth
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

// Use Controller Admin
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\KampusController;
use App\Http\Controllers\Backend\AlumniController;

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
    Route::group(['prefix' => 'admin' , 'middleware' => 'admin'], function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin');

        // data kampus
        Route::get('kampus/data-kampus', [KampusController::class, 'getKampus'])->name('kampus.index');
        Route::get('kampus/add-kampus', [KampusController::class, 'showFormKampus'])->name('kampus.add');
        Route::post('kampus/store', [KampusController::class, 'kampusStore'])->name('kampus.store');
        Route::get('kampus/edit-kampus/{id}', [KampusController::class, 'editKampus'])->name('kampus.edit');
        Route::put('kampus/update-kampus/{id}', [KampusController::class, 'updateKampus'])->name('kampus.update');
        Route::delete('kampus/destroy/{id}', [KampusController::class, 'kampusHapus'])->name('kampus.destroy');

        Route::get('alumni', [AlumniController::class, 'getKampus'])->name('alumni.index');
        Route::get('alumni/data-alumni/{id}',[AlumniController::class, 'getAlumni'])->name('alumni.home');
        Route::get('alumni/add-alumni/{id}',[AlumniController::class, 'addAlumni'])->name('alumni.add');
        Route::post('alumni/store',[AlumniController::class, 'alumniStore'])->name('alumni.store'); 
        Route::get('alumni/edit-alumni/{id}', [AlumniController::class, 'editAlumni'])->name('alumni.edit');
        Route::put('alumni/update-alumni/{id}', [AlumniController::class, 'updateAlumni'])->name('alumni.update');
        Route::delete('alumni/destroy/{id}', [AlumniController::class, 'alumniHapus'])->name('alumni.destroy');

        // Slider
        Route::get('slider', [SliderController::class, 'getSlider'])->name('slider.index');
    });

    // route frontend user
    Route::group(['middleware' => 'user'], function () {
        Route::get('user', [UserController::class, 'index'])->name('user');
    });
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
 
});
