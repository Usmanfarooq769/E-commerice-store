<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
 use App\Http\Controllers\ContactUsController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
     Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('permission:dashboard')->name('dashboard');
});


//Admin routes (auth + admin role required) 
Route::middleware(['auth', 'verified', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class)->except(['show']);
        Route::get('permissions/data', [PermissionController::class, 'getData'])->name('permissions.data');
        Route::resource('users', UserController::class)->only(['index' ,'create' , 'show' , 'store' , 'edit' , 'update']);
        Route::get('users/{user}/edit-role', [UserController::class, 'editRole'])->name('users.editRole');
        Route::post('users/{user}/assign-role', [UserController::class, 'assignRole'])->name('users.assign-role');
        Route::delete('users/{user}/revoke-role/{role}', [UserController::class, 'revokeRole'])->name('users.revoke-role');
        Route::post('users/{user}/sync-roles', [UserController::class, 'syncRoles']) ->name('users.sync-roles');
        // Route::get('users/{user}/profile-settings', [UserController::class, 'profileSettings'])->name('users.profile-settings');
    });

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {

    // Categories
    Route::get('categories',           [CategoryController::class, 'index'])->name('categories.index')->middleware('permission:view category');
    Route::get('categories/data',      [CategoryController::class, 'getData'])->name('categories.data')->middleware('permission:view category');
    Route::post('categories',          [CategoryController::class, 'store'])->name('categories.store')->middleware('permission:create category');
    Route::put('categories/{id}',      [CategoryController::class, 'update'])->name('categories.update')->middleware('permission:edit category');
    Route::delete('categories/{id}',   [CategoryController::class, 'destroy'])->name('categories.destroy')->middleware('permission:delete category');

    // Products
  
    Route::get('products',           [ProductController::class, 'index'])->name('products.index')->middleware('permission:view products');
    Route::get('products/data',      [ProductController::class, 'getData'])->name('products.data')->middleware('permission:view products');
    Route::post('products',          [ProductController::class, 'store'])->name('products.store')->middleware('permission:create products');
    Route::put('products/{id}',      [ProductController::class, 'update'])->name('products.update')->middleware('permission:edit products');
    Route::delete('products/{id}',   [ProductController::class, 'destroy'])->name('products.destroy')->middleware('permission:delete products');

    //orders
    Route::get('orders',                    [OrderController::class, 'index'])->name('orders.index');
    Route::get('orders/data',               [OrderController::class, 'getData'])->name('orders.data');
    Route::get('orders/{id}',               [OrderController::class, 'show'])->name('orders.show');
    Route::post('orders/{id}/assign',       [OrderController::class, 'assignDelivery'])->name('orders.assign');
    Route::put('orders/{id}/status',        [OrderController::class, 'updateStatus'])->name('orders.status');
    Route::delete('orders/{id}',            [OrderController::class, 'destroy'])->name('orders.destroy');
    // Invoice reuse from checkout
    Route::get('order/{id}/invoice',        [CheckoutController::class, 'downloadInvoice'])->name('order.invoice');

    // Deliveries
    Route::get('deliveries',         [DeliveryController::class, 'index'])->name('deliveries.index');
    Route::get('deliveries/data',    [DeliveryController::class, 'getData'])->name('deliveries.data');
    Route::post('deliveries',        [DeliveryController::class, 'store'])->name('deliveries.store');
    Route::put('deliveries/{id}',    [DeliveryController::class, 'update'])->name('deliveries.update');
    Route::delete('deliveries/{id}', [DeliveryController::class, 'destroy'])->name('deliveries.destroy');

  
});




Route::get('/',                  [UserProductController::class, 'index'])->name('products');
Route::get('product/{slug}',            [UserProductController::class, 'show'])->name('product-details');
Route::get('/categories/{slug}', [UserProductController::class, 'byCategory'])->name('category');
    Route::get('cart',            [CartController::class, 'index'])->name('cart');
    Route::post('cart/add',        [CartController::class, 'add'])->name('cart.add');
    Route::put('cart/{id}',        [CartController::class, 'update'])->name('cart.update');
    Route::delete('cart/{id}',     [CartController::class, 'remove'])->name('cart.remove');
    Route::get('cart/header-data', [CartController::class, 'headerCart'])->name('cart.header');
    Route::get('check-out',                   [CheckoutController::class, 'index'])->name('check-out');
    Route::post('check-out/place-order',      [CheckoutController::class, 'placeOrder'])->name('checkout.place-order');
    Route::get('order/{id}/invoice',          [CheckoutController::class, 'downloadInvoice'])->name('order.invoice');
   Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact.us');
   Route::post('/contact-us/store', [ContactUsController::class, 'store'])->name('contact.us.store');

