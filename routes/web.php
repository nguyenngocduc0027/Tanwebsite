<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FavoriteProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ListShopController;
use App\Http\Controllers\NotificationSaleController;
use App\Http\Controllers\PopupAdsController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlankPageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GiftController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\CartController;
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
Route::get('/product_category/{category}', [HomeController::class, 'product_category'])->name('product_category');
Route::get('/product_sub_category/{type}', [HomeController::class, 'product_sub_category'])->name('product_sub_category');
Route::get('/product_subsub_category/{level}', [HomeController::class, 'product_subsub_category'])->name('product_subsub_category');
Route::get('/product_detail/{id}', [HomeController::class, 'product_detail'])->name('product_detail');
Route::get('/blogs', [HomeController::class, 'blog'])->name('blogs');
Route::get('/blog_detail', [HomeController::class, 'blog_detail'])->name('blog_detail');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/blank', [HomeController::class, 'blank'])->name('blank');


// Auth
Route::get('/login', [AuthController::class, 'view_login'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('dologin');
Route::get('/register', [AuthController::class, 'view_register'])->name('register');
Route::post('/register', [AuthController::class, 'post_register'])->name('register');

Route::get('/forgot_password', [AuthController::class, 'view_forgot_password'])->name('forgot');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/admin/upload-image', [UploadController::class, 'uploadImage']);
Route::post('/favorite/{productId}', [FavoriteProductController::class, 'toggleFavorite'])->middleware('auth')->name('favorite.toggle');


Route::middleware(['auth', 'role:admin,manager'])->group(function () {
    // My Controller
    Route::get('/get-types/{category_id}', [MyController::class, 'getTypes']);
    Route::get('/get-levels/{type_id}', [MyController::class, 'getLevels']);

    // Admin
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.index');
    // Web Config
    Route::get('/web_config', [AdminController::class, 'web_config'])->name('admin.web_config');
    Route::get('/settings/data', [SettingController::class, 'show'])->name('settings.data');
    Route::post('/settings/update', [SettingController::class, 'update'])->name('settings.update');

    // Home Page
    Route::get('/home_page', [AdminController::class, 'home_page'])->name('admin.home_page');
    Route::get('/home_page/data', [HomePageController::class, 'show'])->name('homePage.data');
    Route::post('/home_page/update', [HomePageController::class, 'update'])->name('homePage.update');

    // Blank Page
    Route::get('/blank_page', [AdminController::class, 'blank_page'])->name('admin.blank_page');
    Route::post('/blank_page/store', action: [BlankPageController::class, 'store'])->name('blankPage.store');
    Route::put('/blank_page/update/{id}', [BlankPageController::class, 'update'])->name('blankPage.update');
    Route::delete('/blank_page/{id}', [BlankPageController::class, 'destroy'])->name('blankPage.destroy');

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
    // Category CRUD
    Route::post('/category/store', [CategoryController::class, 'storeCategory'])->name('category.store');
    Route::put('/category/update/{id}', [CategoryController::class, 'updateCategory'])->name('category.update');
    Route::delete('/category/delete/{id}', [CategoryController::class, 'destroyCategory'])->name('category.delete');

    // Type CRUD
    Route::post('/type/store', [CategoryController::class, 'storeType'])->name('type.store');
    Route::put('/type/update/{id}', [CategoryController::class, 'updateType'])->name('type.update');
    Route::delete('/type/delete/{id}', [CategoryController::class, 'destroyType'])->name('type.delete');

    // Level CRUD
    Route::post('/level/store', [CategoryController::class, 'storeLevel'])->name('level.store');
    Route::put('/level/update/{id}', [CategoryController::class, 'updateLevel'])->name('level.update');
    Route::delete('/level/delete/{id}', [CategoryController::class, 'destroyLevel'])->name('level.delete');

    // Blog
    Route::get('/blog', [AdminController::class, 'blog'])->name('admin.blog');
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/blog/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
    Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/blog/{id}/delete', [BlogController::class, 'destroy'])->name('blog.destroy');

    // Product
    Route::get('/admin/product', [AdminController::class, 'product'])->name('admin.product');
    Route::get('/admin/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/admin/products/store', [ProductController::class, 'store'])->name('products.store');
    Route::get('/admin/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::post('/admin/products/{id}/update', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/admin/products/{id}/delete', [ProductController::class, 'destroy'])->name('product.destroy');

    // Gift
    Route::get('/admin/gift', [AdminController::class, 'gift'])->name('admin.gift');
    Route::get('/admin/gifts/create', [GiftController::class, 'create'])->name('gift.create');
    Route::post('/admin/gifts/store', [GiftController::class, 'store'])->name('gifts.store');
    Route::get('/admin/gifts/{id}/edit', [GiftController::class, 'edit'])->name('gifts.edit');
    Route::put('/admin/gifts/{id}/update', [GiftController::class, 'update'])->name('gifts.update');
    Route::delete('/admin/gifts/{id}/delete', [GiftController::class, 'destroy'])->name('gift.destroy');

    // Slider
    Route::get('/admin/slider', [AdminController::class, 'slider'])->name('admin.slider');
    Route::post('/slider/store', [SliderController::class, 'store'])->name('slider.store');
    Route::put('/slider/{id}', [SliderController::class, 'update'])->name('slider.update');
    Route::delete('/slider/{id}', [SliderController::class, 'destroy'])->name('slider.destroy');

    // Testimonial
    Route::get('/admin/testimonial', [AdminController::class, 'testimonial'])->name('admin.testimonial');
    Route::post('/admin/testimonial/store', [TestimonialController::class, 'store'])->name('testimonial.store');
    Route::put('/admin/testimonial/{id}', [TestimonialController::class, 'update'])->name('testimonial.update');
    Route::delete('/admin/testimonial/{id}', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');

    // Partner
    Route::get('/admin/partner', [AdminController::class, 'partner'])->name('admin.partner');
    Route::post('/admin/partner/store', [PartnerController::class, 'store'])->name('partner.store');
    Route::put('/admin/partner/{id}', [PartnerController::class, 'update'])->name('partner.update');
    Route::delete('/admin/partner/{id}', [PartnerController::class, 'destroy'])->name('partner.destroy');

    // Inventory
    Route::get('/admin/inventory', [AdminController::class, 'inventory'])->name('admin.inventory');
});

// User
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user', [UserController::class, 'dashboard'])->name('user.index');
});

Route::middleware('checklogin')->group(function () {
    Route::get('auth/san-pham-yeu-thich', [FavoriteProductController::class, 'index'])->name('favorite.index');
});