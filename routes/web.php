<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProductController::class, 'index'])->name('create');
Route::get('/products', [ProductController::class, 'show'])->name('products');
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
Route::post('/store', [ProductController::class, 'store'])->name('store'); 
Route::patch('/update/{id}', [ProductController::class, 'update'])->name('update');
Route::delete('/destroy/{id}', [ProductController::class, 'destroy'])->name('delete');

Route::get('/create-category', [CategoryController::class, 'create'])->name('create-category');

Route::get('/category', [CategoryController::class, 'index'])->name('category');

Route::post('/category-store', [CategoryController::class, 'store'])->name('category-store');

Route::delete('/category-delete/{id}', [CategoryController::class,'delete']);
