<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogTipController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('auth/login', [AuthController::class, 'loginPage'])->name('admin.auth.loginPage');
Route::post('auth/login', [AuthController::class, 'login'])->name('admin.auth.login');


Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::post('logout', [AuthController::class, 'logout'])->name('admin.auth.logout');
    });

    Route::get('', [DashboardController::class, 'dashboard'])->name('admin');
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

    Route::group(['prefix' => 'blog-tips'], function () {
        Route::get('', [BlogTipController::class, 'index'])->name('admin.blogTips.index');
        Route::get('/create', [BlogTipController::class, 'create'])->name('admin.blogTips.create');
        Route::post('', [BlogTipController::class, 'store'])->name('admin.blogTips.store');
        Route::get('/edit/{tip}', [BlogTipController::class, 'edit'])->name('admin.blogTips.edit');
        Route::post('/edit/{tip}', [BlogTipController::class, 'update'])->name('admin.blogTips.update');
        Route::get('/delete/{tip}', [BlogTipController::class, 'delete'])->name('admin.blogTips.delete');
    });


});

