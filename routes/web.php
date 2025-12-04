<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('shop');
Route::get('/index/shop/{id}', [App\Http\Controllers\PagesController::class, 'byCategory'])->name('index.shop');
Route::get('/index/shoptop/', [App\Http\Controllers\PagesController::class, 'index'])->name('index.shoptop');
Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('about');

// contact controller
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'send'])->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'mail'])->name('contact.send');

//cart
Route::get('/cart', [App\Http\Controllers\CartController::class, 'cart'])->name('cart');
Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::get('/remove-from-cart/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');

// checkout
Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'showCheckout'])->name('checkout');
Route::post('/place-order', [CheckoutController::class, 'placeOrder'])->name('place.order');



    //products
    Route::get('/singleproduct/{id}', [App\Http\Controllers\PagesController::class, 'singleproduct'])->name('singleproduct');
    Route::get('/listshop', [App\Http\Controllers\PagesController::class, 'listshop'])->name('listshop');

    Route::middleware(['auth', 'admin'])->group(function () {
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
   
    Route::delete('/orders/{id}', [App\Http\Controllers\OrderController::class, 'deleteOrder'])
        ->name('order.delete');

  

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
