<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::get('/product/', [ProductController::class, 'index'])->name('products.index');
Route::get('/product/show/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/product/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/product/edit/{product}', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/product/update/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/product/destroy/{product}', [ProductController::class, 'destroy'])->name('products.destroy');