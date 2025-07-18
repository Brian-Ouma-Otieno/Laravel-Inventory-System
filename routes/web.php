<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;

// signup
Route::get('/', [SignupController::class, 'index'])->name('signup');
Route::post('/', [SignupController::class, 'signup'])->name('form.signup');

// login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('form.login');

// home
Route::get('/home', [HomeController::class, 'index'])->name('home');

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


// product trash
Route::get('products/trash', [ProductController::class, 'trashindex'])->name('products.trash');
Route::get('products/restore/{product}', [ProductController::class, 'restore'])->name('products.restore');
Route::delete('products/trash/{product}', [ProductController::class, 'permanentDelete'])->name('products.permanent.delete');

// supplier trash
Route::get('suppliers/trash', [SupplierController::class, 'trashindex'])->name('suppliers.trash');
Route::get('suppliers/restore/{supplier}', [SupplierController::class, 'restore'])->name('suppliers.restore');
Route::delete('suppliers/trash/{supplier}', [SupplierController::class, 'permanentDelete'])->name('suppliers.permanent.delete');

Route::resource('products', ProductController::class);
Route::resource('suppliers', SupplierController::class);


Route::get('/stock', function () {
    return view('stock.history');
})->name('stock.history');

Route::get('/reports', function () {
    return view('reports.index');
})->name('reports.index');


