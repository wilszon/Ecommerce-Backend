<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;

// Página principal
Route::get('/', [ProductController::class, 'index']);

Auth::routes();

// Dashboard
Route::get('/home', [HomeController::class, 'index'])->name('home');

// GRUPO ADMIN
Route::prefix('admin')->group(function () {

    // Admin home
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    // CATEGORIES
Route::get('/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('admin.categories.store');

    // PRODUCTS
    Route::get('products', [ProductController::class, 'table'])->name('admin.products.table');
    Route::get('products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('products/store', [ProductController::class, 'store'])->name('admin.products.store');
    Route::delete('products/{id}/delete', [ProductController::class, 'delete'])->name('admin.products.delete');
    Route::get('/products/{id}', [ProductController::class, 'detail'])->name('product.detail');



    // BRANDS
    Route::get('/brands', [BrandController::class, 'index'])->name('admin.brands.index');
    Route::get('/brands/create', [BrandController::class, 'create'])->name('admin.brands.create');
    Route::post('/brands/store', [BrandController::class, 'store'])->name('admin.brands.store');
});
