<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;

Route::get('/', [BookController::class, 'welcome'])->name('welcome');
Route::get('/books/user/{id}', [BookController::class, 'showuser'])->name('books.showuser');

Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index'); // List all categories
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create'); // Show the create form
    Route::post('/', [CategoryController::class, 'store'])->name('categories.store'); // Create a new category
    Route::get('/{id}', [CategoryController::class, 'show'])->name('categories.show'); // Show a specific category
    Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit'); // Show the edit form
    Route::put('/{id}', [CategoryController::class, 'update'])->name('categories.update'); // Update a category
    Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy'); // Delete a category
});

Route::resource('books', BookController::class);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::resource('books', BookController::class);
    Route::resource('categories', CategoryController::class);
});

// Cart Routes (No Authentication Required)
Route::post('/cart', [CartController::class, 'store'])->name('cart.store'); // Add to cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index'); // View cart
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy'); // Remove from cart