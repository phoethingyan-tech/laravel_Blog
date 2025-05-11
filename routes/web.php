<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\FrontController::class, 'blog'])->name('blog');
Route::get('/detail/{id}', [App\Http\Controllers\FrontController::class, 'detail'])->name('detail');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
