<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index'); // List all categories
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create'); // Show the create form
    Route::post('/', [CategoryController::class, 'store'])->name('categories.store'); // Create a new category
    Route::get('/{id}', [CategoryController::class, 'show'])->name('categories.show'); // Show a specific category
    Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit'); // Show the edit form
    Route::put('/{id}', [CategoryController::class, 'update'])->name('categories.update'); // Update a category
    Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy'); // Delete a category
});