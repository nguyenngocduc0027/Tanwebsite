<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/product', [HomeController::class, 'product'])->name('product');
Route::get('/product_category', [HomeController::class, 'product_category'])->name('product_category');
Route::get('/product_sub_category', [HomeController::class, 'product_sub_category'])->name('product_sub_category');
Route::get('/product_subsub_category', [HomeController::class, 'product_subsub_category'])->name('product_subsub_category');
Route::get('/product_detail', [HomeController::class, 'product_detail'])->name('product_detail');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
