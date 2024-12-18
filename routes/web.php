<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;

// Routes cho Client
Route::get('/', [ClientController::class, 'home'])->name('client.home');
Route::get('/product/{id}', [ClientController::class, 'product'])->name('client.product');

// Routes cho Admin
Route::prefix('admin')->group(function() {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('products', AdminController::class);
});

