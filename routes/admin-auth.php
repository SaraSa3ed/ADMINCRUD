<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisteredAdminController;

use App\Http\Controllers\Admin\AdminsController; // Import the AdminController

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('guest:admin')->group(function () {

    //Admin Register
    Route::get('register', [RegisteredAdminController::class, 'create'])->name('admin.register');
    Route::post('register', [RegisteredAdminController::class, 'store']);

//Admin Login
    Route::get('login', [LoginController::class, 'create'])->name('admin.login');
    Route::post('login', [LoginController::class, 'store']);
});

Route::prefix('admin')->middleware('auth:admin')->group(function () {
    Route::get('/admins', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admins/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/admins', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/admins/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/admins/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/admins/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');

    //ADmin Dashboard
    Route::get('/', function () {
        return view('admin.masterpage');
    })->name('admin.masterpage');


        //Admin logout
    Route::post('logout', [LoginController::class, 'destroy'])->name('admin.logout');
});