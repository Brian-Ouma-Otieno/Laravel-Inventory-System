<?php

// use App\Http\Controllers\ProfileController;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\DashboardController;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';



// signup
Route::get('/', [SignupController::class, 'index'])->name('signup');
Route::post('/', [SignupController::class, 'signup'])->name('form.signup');

// login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('form.login');

// logout
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


// product trash
Route::middleware('auth')->group(function () {
    Route::get('products/trash', [ProductController::class, 'trashindex'])->name('products.trash');
    Route::get('products/restore/{product}', [ProductController::class, 'restore'])->name('products.restore');
    Route::delete('products/trash/{product}', [ProductController::class, 'permanentDelete'])->name('products.permanent.delete');
});

// supplier trash
Route::middleware('auth')->group(function () {
    Route::get('suppliers/trash', [SupplierController::class, 'trashindex'])->name('suppliers.trash');
    Route::get('suppliers/restore/{supplier}', [SupplierController::class, 'restore'])->name('suppliers.restore');
    Route::delete('suppliers/trash/{supplier}', [SupplierController::class, 'permanentDelete'])->name('suppliers.permanent.delete');
});

Route::resource('products', ProductController::class)->middleware(['auth', 'verified']);
Route::resource('suppliers', SupplierController::class)->middleware(['auth', 'verified']);


Route::get('/stock', function () {
    return view('stock.history');
})->name('stock.history');

Route::get('/reports', function () {
    return view('reports.index');
})->name('reports.index');
