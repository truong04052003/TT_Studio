<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboarController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductCodeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\SupplierController;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\ProductCode;

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
// LOGIN ADMIN
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');
Route::get('/forget-password', [UserController::class, 'forget_password'])->name('forget-password');
Route::post('/post-forget-password', [UserController::class, 'post_forget_password'])->name('post-forget-password');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
//SHOP
Route::prefix('shop')->group(function () {
    Route::get('/index', [ShopController::class, 'index'])->name('shop.index');
    Route::get('/showsanpham/{id}', [ShopController::class, 'show'])->name('showsanpham');
    Route::get('/checkOuts', [ShopController::class, 'checkOuts'])->name('shop.checkOuts');
    Route::get('/search', [ShopController::class, 'search'])->name('shop.search');
});
//giỏ hàng
Route::get('cart', [ShopController::class, 'cart'])->name('show.cart');
Route::get('add-to-cart/{id}', [ShopController::class, 'addToCart'])->name('add-to-cart');
Route::patch('update-cart', [ShopController::class, 'update1'])->name('update-cart');
Route::delete('remove-from-cart', [ShopController::class, 'remove'])->name('remove-from-cart');

Route::prefix('/')->middleware(['auth', 'prevent-back-history'])->group(function () {
    Route::get('/', [DashboarController::class, 'index'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



    //PRODUCT===========
    Route::prefix('products')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('products.index');
        Route::get('/create', [ProductController::class, 'create'])->name('products.create');
        Route::post('/', [ProductController::class, 'store'])->name('products.store');
        Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
        Route::put('/{id}', [ProductController::class, 'update'])->name('products.update');
        Route::delete('{id}', [ProductController::class, 'destroy'])->name('products.destroy');
        //thùng rác
        Route::get('/garbagecan', [ProductController::class, 'garbagecan'])->name('products.garbagecan');
        Route::get('/restore/{id}', [ProductController::class, 'restore'])->name('products.restore');
        Route::get('/deleteforever/{id}', [ProductController::class, 'deleteforever'])->name('products.deleteforever');
        Route::get('/{id}', [ProductController::class, 'show'])->name('products.show');
        Route::post('/search', [ProductController::class, 'search'])->name('products.search');
        Route::get('/exportExcel', [ProductController::class, 'Excel'])->name('products.Excel');
    });
    //CATEGORY
    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::put('/{id}', [CategoryController::class, 'update'])->name('categories.update');
        Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
        //thùng rác
        Route::get('/garbagecan', [CategoryController::class, 'garbagecan'])->name('categories.garbagecan');
        Route::get('/restore/{id}', [CategoryController::class, 'restore'])->name('categories.restore');
        Route::get('/deleteforever/{id}', [CategoryController::class, 'deleteforever'])->name('categories.deleteforever');
        Route::get('/{id}', [CategoryController::class, 'show'])->name('categories.show');
    });

    //ORDERS
    Route::group(['prefix' => 'orders'], function () {
        Route::get('/', [OrderController::class, 'index'])->name('orders.index');
        Route::get('/export-orders', [OrderController::class, 'export'])->name('orders.export');
        Route::get('/detail/{id}', [OrderController::class, 'detail'])->name('orders.detail');
    });
    //NHÓM QUYỀN
    Route::prefix('group')->group(function () {
        Route::get('/', [GroupController::class, 'index'])->name('group.index');
        Route::get('/create', [GroupController::class, 'create'])->name('group.create');
        Route::post('/store', [GroupController::class, 'store'])->name('group.store');
        Route::get('/edit/{id}', [GroupController::class, 'edit'])->name('group.edit');
        Route::put('/update/{id}', [GroupController::class, 'update'])->name('group.update');
        Route::delete('/destroy/{id}', [GroupController::class, 'destroy'])->name('group.destroy');
        //thùng rác
        Route::get('/trash', [GroupController::class, 'trash'])->name('group.trash');
        Route::get('/restore/{id}', [GroupController::class, 'restore'])->name('group.restore');
        Route::delete('/forcedelete/{id}', [GroupController::class, 'forcedelete'])->name('group.forcedelete');
        Route::get('/detail/{id}', [GroupController::class, 'detail'])->name('group.detail');
        Route::put('/group_detail/{id}', [GroupController::class, 'group_detail'])->name('group.group_detail');
    });
    //NHÂN VIÊN
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('users.index');
        Route::get('/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/store', [UserController::class, 'store'])->name('users.store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
        Route::put('/update/{id}', [UserController::class, 'update'])->name('users.update');
        Route::delete('/destroy/{id}', [UserController::class, 'destroy'])->name('users.destroy');
        Route::get('/{id}', [UserController::class, 'show'])->name('users.show');
        Route::post('update-password/{id}', [UserController::class, 'update_password'])->name('user-update-password');
    });

    Route::prefix('suppliers')->group(function () {
        Route::get('/', [SupplierController::class, 'index'])->name('suppliers.index');
        Route::get('/create', [SupplierController::class, 'create'])->name('suppliers.create');
        Route::post('/store', [SupplierController::class, 'store'])->name('suppliers.store');
        Route::get('/edit/{id}', [SupplierController::class, 'edit'])->name('suppliers.edit');
        Route::put('/update/{id}', [SupplierController::class, 'update'])->name('suppliers.update');
        Route::delete('/destroy/{id}', [SupplierController::class, 'destroy'])->name('suppliers.destroy');
        //thùng rác
        Route::get('/getTrashed', [SupplierController::class, 'getTrashed'])->name('suppliers.getTrashed');
        Route::get('/restore/{id}', [SupplierController::class, 'restore'])->name('suppliers.restore');
        Route::delete('/force_destroy/{id}', [SupplierController::class, 'force_destroy'])->name('suppliers.forcedelete');
    });
});
