<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\FrontController::class, 'blog'])->name('blog');
Route::get('/detail/{id}', [App\Http\Controllers\FrontController::class, 'detail'])->name('detail');

Route::group(['prefix'=>'backend', 'as'=>'backend.'], function() {
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('dashboard');
});
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
