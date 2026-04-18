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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/', fn () => redirect()->route('admin.roles.index'));
 
//Admin routes (auth + admin role required) 
Route::middleware(['auth', 'verified', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class)->except(['show']);
        Route::resource('users', UserController::class)->only(['index', 'show' ,'create' , 'store']);
        Route::post('users/{user}/assign-role', [UserController::class, 'assignRole'])->name('users.assign-role');
        Route::delete('users/{user}/revoke-role/{role}', [UserController::class, 'revokeRole'])->name('users.revoke-role');
        Route::post('users/{user}/sync-roles', [UserController::class, 'syncRoles']) ->name('users.sync-roles');
        // Route::get('users/{user}/profile-settings', [UserController::class, 'profileSettings'])->name('users.profile-settings');
    });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        // return view('dashboard');
        return view('ecommerce');
    })->name('dashboard');
});

// user 
Route::get('profile', function () {
    return view('profile');
})->name('profile');

Route::get('mail-settings', function () {
    return view('mail-settings');
})->name('mail-settings');


Route::get('sign-in-cover', function () {
    return view('sign-in-cover');
})->name('sign-in-cover');


Route::get('mail', function () {
    return view('mail');
})->name('mail');

// all deshboard 



Route::get('ecommerce', function () {
    return view('ecommerce');
})->name('ecommerce');
// ecommerce website routes 


Route::get('add-products', function () {
    return view('add-products');
})->name('add-products');


Route::get('cart', function () {
    return view('cart');
})->name('cart');

Route::get('check-out', function () {
    return view('checkout');
})->name('check-out');

Route::get('products', function () {
    return view('products');
})->name('products');

Route::get('products-list', function () {
    return view('products-list');
})->name('products-list');

Route::get('product-details', function () {
    return view('product-details');
})->name('product-details');

Route::get('wishlist', function () {
    return view('wishlist');
})->name('wishlist');


Route::get('edit-products', function () {
    return view('edit-products');
})->name('edit-products');

Route::get('order-details', function () {
    return view('order-details');
})->name('order-details');

Route::get('orders', function () {
    return view('orders');
})->name('orders');

Route::get('products-list', function () {
    return view('products-list');
})->name('products-list');
//Email


Route::get('mail', function () {
    return view('mail');
})->name('mail');

Route::get('mail-settings', function () {
    return view('mail-settings');
})->name('mail-settings');  


//Admin routes

// routes/web.php


Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {

    // Categories
    Route::get('categories',           [CategoryController::class, 'index'])->name('categories.index');
    Route::get('categories/data',      [CategoryController::class, 'getData'])->name('categories.data');
    Route::post('categories',          [CategoryController::class, 'store'])->name('categories.store');
    Route::put('categories/{id}',      [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('categories/{id}',   [CategoryController::class, 'destroy'])->name('categories.destroy');

    // Products
  
    Route::get('products',           [ProductController::class, 'index'])->name('products.index');
    Route::get('products/data',      [ProductController::class, 'getData'])->name('products.data');
    Route::post('products',          [ProductController::class, 'store'])->name('products.store');
    Route::put('products/{id}',      [ProductController::class, 'update'])->name('products.update');
    Route::delete('products/{id}',   [ProductController::class, 'destroy'])->name('products.destroy');

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




Route::prefix('user')->name('user.')->middleware(['auth'])->group(function () {

// Route::get('products', function () {
//     return view('user.index');
// })->name('products');

// Route::get('cart', function () {
//     return view('user.cart');
// })->name('cart');

// Route::get('check-out', function () {
//     return view('user.checkout');
// })->name('check-out');
// Route::get('wishlist', function () {
//     return view('user.wishlist');
// })->name('wishlist');

// Route::get('product-details', function () {
//     return view('user.product-details');
// })->name('product-details');


Route::get('products',                  [UserProductController::class, 'index'])->name('products');
Route::get('product/{slug}',            [UserProductController::class, 'show'])->name('product-details');
Route::get('/categories/{slug}', [UserProductController::class, 'byCategory'])->name('category');
    
    
    Route::get('wishlist',  fn() => view('user.wishlist'))->name('wishlist');


    // Cart AJAX
    Route::get('cart',            [CartController::class, 'index'])->name('cart');
    Route::post('cart/add',        [CartController::class, 'add'])->name('cart.add');
    Route::put('cart/{id}',        [CartController::class, 'update'])->name('cart.update');
    Route::delete('cart/{id}',     [CartController::class, 'remove'])->name('cart.remove');
    Route::get('cart/header-data', [CartController::class, 'headerCart'])->name('cart.header');

    


    // ... existing routes ...
    Route::get('check-out',                   [CheckoutController::class, 'index'])->name('check-out');
    Route::post('check-out/place-order',      [CheckoutController::class, 'placeOrder'])->name('checkout.place-order');
    Route::get('order/{id}/invoice',          [CheckoutController::class, 'downloadInvoice'])->name('order.invoice');


});