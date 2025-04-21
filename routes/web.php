<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListShopController;
use App\Http\Controllers\NotificationSaleController;
use App\Http\Controllers\PopupAdsController;
use App\Http\Controllers\SettingController;
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
Route::get('/blog_detail', [HomeController::class, 'blog_detail'])->name('blog_detail');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/blank', [HomeController::class, 'blank'])->name('blank');


Route::get('/login', [AuthController::class, 'view_login'])->name('login');

Route::get('/register', [AuthController::class, 'view_register'])->name('register');

Route::get('/forgot_password', [AuthController::class, 'view_forgot_password'])->name('forgot');



// Admin
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.index');
// Web Config
Route::get('/web_config', [AdminController::class, 'web_config'])->name('admin.web_config');
Route::get('/settings/data', [SettingController::class, 'show'])->name('settings.data');
Route::post('/settings/update', [SettingController::class, 'update'])->name('settings.update');

// Notification Sale
Route::get('/notification_sale', [AdminController::class, 'notification_sale'])->name('admin.notification_sale');
Route::get('/notification_sale/data', [NotificationSaleController::class, 'show'])->name('notificationSale.data');
Route::post('/notification_sale/store', [NotificationSaleController::class, 'store'])->name('notificationSale.store');
Route::put('/notification_sale/{id}', [NotificationSaleController::class, 'update'])->name('notificationSale.update');
Route::delete('/notification_sale/{id}', [NotificationSaleController::class, 'destroy'])->name('notificationSale.destroy');

// Popup Ads
Route::get('/popup_ads', [AdminController::class, 'popup_ads'])->name('admin.popup_ads');
Route::get('/popup_ads/data', [PopupAdsController::class, 'show'])->name('popupAds.data');
Route::post('/popup_ads/update', [PopupAdsController::class, 'update'])->name('popupAds.update');

// List Shop
Route::get('/list_shop', [AdminController::class, 'list_shop'])->name('admin.list_shop');
Route::get('/list_shop/data', [ListShopController::class, 'show'])->name('listShop.data');
Route::post('/list_shop/store', [ListShopController::class, 'store'])->name('listShop.store');
Route::put('/list_shop/{id}', [ListShopController::class, 'update'])->name('listShop.update');
Route::delete('/list_shop/{id}', [ListShopController::class, 'destroy'])->name('listShop.destroy');


// Account
Route::get('/account', [AdminController::class, 'account'])->name('admin.account');
Route::get('/account/data', [AccountController::class, 'show'])->name('account.data');
Route::post('/account/store', [AccountController::class, 'store'])->name('account.store');
Route::put('/account/{id}', [AccountController::class, 'update'])->name('account.update');
Route::put('/account/pass/{id}', [AccountController::class, 'update_password'])->name('account.update.pass');
Route::delete('/account/{id}', [AccountController::class, 'destroy'])->name('account.destroy');


// Category
Route::get('/category', [AdminController::class, 'category'])->name('admin.category');

