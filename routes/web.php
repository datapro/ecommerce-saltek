<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('shop');
Route::get('/index/shop/{id}', [App\Http\Controllers\PagesController::class, 'byCategory'])->name('index.shop');
Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'send'])->name('contact');

//cart
Route::get('/cart', [App\Http\Controllers\CartController::class, 'cart'])->name('cart');
Route::get('/checkout', [App\Http\Controllers\CartController::class, 'checkout'])->name('checkout');



//products
Route::get('/singleproduct', [App\Http\Controllers\PagesController::class, 'singleproduct'])->name('singleproduct');
Route::get('/listshop', [App\Http\Controllers\PagesController::class, 'listshop'])->name('listshop');

// products 
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'adminDashboard'])->name('dashboard');
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');
Route::get('/category', [App\Http\Controllers\ProductController::class, 'category'])->name('category');


// product logics
Route::post('/storeproduct', [App\Http\Controllers\ProductController::class, 'storeproduct'])->name('storeproduct');
Route::delete('/deleteproduct/{id}', [App\Http\Controllers\ProductController::class, 'deleteproduct'])->name('deleteproduct');
Route::get('/editproduct/{id}', [App\Http\Controllers\ProductController::class, 'editproduct'])->name('editproduct');
Route::put('/updateproduct/{id}', [App\Http\Controllers\ProductController::class, 'updateproduct'])->name('updateproduct');

// category 
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');
Route::post('/store', [App\Http\Controllers\CategoryController::class, 'storecategory'])->name('store');
Route::delete('/deletecategory/{id}', [App\Http\Controllers\CategoryController::class, 'deletecategory'])->name('deletecategory');
Route::get('/editcategory/{id}', [App\Http\Controllers\CategoryController::class, 'editcategory'])->name('editcategory');
Route::put('/updatecategory/{id}', [App\Http\Controllers\CategoryController::class, 'updatecategory'])->name('updatecategory');


// order | user delete
Route::get('/orders', [App\Http\Controllers\OrderController::class, 'orderList'])->name('orders');
Route::get('/customers', [App\Http\Controllers\OrderController::class, 'customer'])->name('customers');
Route::delete('/customers/{id}', [App\Http\Controllers\OrderController::class, 'destroy'])->name('customers.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
