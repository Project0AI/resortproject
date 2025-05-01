<?php

use App\Http\Controllers\Admin\DestinationController as AdminDestinationController;
use App\Http\Controllers\Admin\ResortController as AdminResortController;
use App\Http\Controllers\Admin\MenuController as AdminMenuController;
use App\Http\Controllers\Admin\ResortController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\User\DestinationController as UserDestinationController;
use App\Http\Controllers\User\ResortController as UserResortController;
use App\Http\Controllers\User\DestinationViewController;


// Admin panel routes
    Route::prefix('admin')->group(function () {
    Route::resource('destinations', AdminDestinationController::class);
    Route::resource('resorts', AdminResortController::class);
    Route::resource('menus', AdminMenuController::class);
    Route::get('/admin', [HomeController::class, 'index'])->name('admin.home');
    
});
//non admin routes 
Route::get('/', [UserDestinationController::class, 'index'])->name('user.home');
Route::get('/destinations/{id}/resorts', [UserResortController::class, 'showResorts'])->name('user.resorts');
Route::get('/resorts/{id}/menus', [UserResortController::class, 'showMenus'])->name('user.menus');
Route::get('/resorts/{id}/book', [UserResortController::class, 'showBooking'])->name('user.booking');
Route::get('/', [DestinationViewController::class, 'index'])->name('user.home');
Route::get('/destinations/{id}/resorts', [DestinationViewController::class, 'resorts'])->name('user.resorts');