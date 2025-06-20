<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Resource route untuk products
Route::resource('products', ProductController::class);

// Atau jika ingin membatasi hanya beberapa method
Route::resource('products', ProductController::class)->only([
    'index', 'show', 'create', 'store', 'edit', 'update', 'destroy'
]);