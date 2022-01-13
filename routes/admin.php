<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BlogTipController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\WorkController;
use App\Http\Controllers\Admin\WorkTipController;
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

    Route::group(['prefix' => 'blogs'], function () {
        Route::get('', [BlogController::class, 'index'])->name('admin.blogs.index');
        Route::get('/create', [BlogController::class, 'create'])->name('admin.blogs.create');
        Route::post('', [BlogController::class, 'store'])->name('admin.blogs.store');
        Route::get('/edit/{blog}', [BlogController::class, 'edit'])->name('admin.blogs.edit');
        Route::post('/edit/{blog}', [BlogController::class, 'update'])->name('admin.blogs.update');
        Route::get('/delete/{blog}', [BlogController::class, 'delete'])->name('admin.blogs.delete');
    });

    Route::group(['prefix' => 'work-tips'], function () {
        Route::get('', [WorkTipController::class, 'index'])->name('admin.workTips.index');
        Route::get('/create', [WorkTipController::class, 'create'])->name('admin.workTips.create');
        Route::post('/store', [WorkTipController::class, 'store'])->name('admin.workTips.store');
        Route::get('/edit/{tip}', [WorkTipController::class, 'edit'])->name('admin.workTips.edit');
        Route::post('/edit/{tip}', [WorkTipController::class, 'update'])->name('admin.workTips.update');
        Route::get('/delete/{tip}', [WorkTipController::class, 'delete'])->name('admin.workTips.delete');
    });

    Route::group(['prefix' => 'works'], function () {
        Route::get('', [WorkController::class, 'index'])->name('admin.works.index');
        Route::get('/create', [WorkController::class, 'create'])->name('admin.works.create');
        Route::post('/store', [WorkController::class, 'store'])->name('admin.works.store');
        Route::get('/edit/{work}', [WorkController::class, 'edit'])->name('admin.works.edit');
        Route::post('/edit/{work}', [WorkController::class, 'update'])->name('admin.works.update');
        Route::get('/delete/{work}', [WorkController::class, 'delete'])->name('admin.works.delete');

    });

});

