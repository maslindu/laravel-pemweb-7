<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Resource route untuk products
Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);

// Atau jika ingin membatasi hanya beberapa method
Route::resource('products', ProductController::class)->only([
    'index', 'show', 'create', 'store', 'edit', 'update', 'destroy'
]);

Route::prefix('api')->group(function () {
    Route::get('products', [ProductController::class, 'apiIndex']);
    Route::get('products/{product}', [ProductController::class, 'apiShow']);
});