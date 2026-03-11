<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index']);
Route::get('/contacts', [ProductController::class, 'contacts']);
Route::get('/products/test', [ProductController::class, 'test'])->name('products.test');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/products/update', [ProductController::class, 'update'])->name('products.update');
Route::get('/products/delete', [ProductController::class, 'delete'])->name('products.delete');


Route::resource('categories', CategoryController::class);