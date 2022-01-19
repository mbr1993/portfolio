<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BlogTipController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FactController;
use App\Http\Controllers\Admin\PriceController;
use App\Http\Controllers\Admin\PriceItemController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ServiceController;
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

    Route::group(['prefix' => 'profile'], function () {
        Route::get('', [ProfileController::class, 'index'])->name('admin.profile.index');
        Route::get('edit/{profile}', [ProfileController::class, 'edit'])->name('admin.profile.edit');
        Route::post('update/{profile}', [ProfileController::class, 'update'])->name('admin.profile.update');
    });

    Route::group(['prefix' => 'service'], function () {
        Route::get('', [ServiceController::class, 'index'])->name('admin.service.index');
        Route::get('/create', [ServiceController::class, 'create'])->name('admin.service.create');
        Route::post('/store', [ServiceController::class, 'store'])->name('admin.service.store');
        Route::get('/edit/{service}', [ServiceController::class, 'edit'])->name('admin.service.edit');
        Route::post('/update/{service}', [ServiceController::class, 'update'])->name('admin.service.update');
        Route::get('/delete/{service}', [ServiceController::class, 'delete'])->name('admin.service.delete');
    });

    Route::prefix('price')->group(function () {
        Route::get('', [PriceController::class, 'index'])->name('admin.price.index');
        Route::get('/create', [PriceController::class, 'create'])->name('admin.price.create');
        Route::post('/store', [PriceController::class, 'store'])->name('admin.price.store');
        Route::get('edit/{price}', [PriceController::class, 'edit'])->name('admin.price.edit');
        Route::post('update/{price}', [PriceController::class, 'update'])->name('admin.price.update');
        Route::get('delete/{price}', [PriceController::class, 'delete'])->name('admin.price.delete');
    });

    Route::prefix('price-item')->group(function () {
        Route::get('', [PriceItemController::class, 'index'])->name('admin.priceItem.index');
        Route::get('create', [PriceItemController::class, 'create'])->name('admin.priceItem.create');
        Route::post('store', [PriceItemController::class, 'store'])->name('admin.priceItem.store');
        Route::get('edit/{item}', [PriceItemController::class, 'edit'])->name('admin.priceItem.edit');
        Route::put('update/{item}', [PriceItemController::class, 'update'])->name('admin.priceItem.update');
        Route::get('delete/{item}', [PriceItemController::class, 'delete'])->name('admin.priceItem.delete');
    });

    Route::prefix('facts')->group(function () {
        Route::get('', [FactController::class, 'index'])->name('admin.facts.index');
        Route::get('create', [FactController::class, 'create'])->name('admin.facts.create');
        Route::post('store', [FactController::class, 'store'])->name('admin.facts.store');
        Route::get('edit/{fact}', [FactController::class, 'edit'])->name('admin.facts.edit');
        Route::put('update/{fact}', [FactController::class, 'update'])->name('admin.facts.update');
        Route::get('delete/{fact}', [FactController::class, 'delete'])->name('admin.facts.delete');
    });


});

