<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
// Admin
Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/redirect', [HomeController::class, 'redirect']);
Route::get('/product', [AdminController::class, 'product']);
Route::post('/uploadproduct', [AdminController::class, 'uploadproduct']);
Route::get('/showproduct', [AdminController::class, 'showproduct']);
Route::get('/deleteproduct/{id}', [AdminController::class, 'deleteproduct']);
Route::get('/deletebooking/{id}', [AdminController::class, 'deletebooking'])->name('deletebooking');
Route::get('/updateproduct/{id}', [AdminController::class, 'updateproduct']);
Route::post('/newproduct/{id}', [AdminController::class, 'newproduct']);
Route::get('/booking', [AdminController::class, 'booking'])->name('bookings');
Route::get('/showdetails/{id}', [AdminController::class, 'showdetails']);
Route::get('/cart', [AdminController::class, 'cart']);
Route::get('/messages', [AdminController::class, 'messages']);

//user products
Route::get('/products', [HomeController::class, 'products'])->name('ourproducts');
Route::get('/bookings/{id}', [HomeController::class, 'bookings'])->name("public.bookings");
Route::get('/search', [HomeController::class, 'search'])->name('search');

Route::post('/addcart/{id}', [HomeController::class, 'addcart'])->name('addcart');

//show cart
Route::get('/showcart', [HomeController::class, 'showcart'])->name('showcart');
//delete cart Route
Route::get('/delete/{id}', [HomeController::class, 'deletecart'])->name('deletecart');
Route::get('/edit/{id}', [HomeController::class, 'updatecart'])->name('editcart');
Route::post('/update/{id}', [HomeController::class, 'updatecart'])->name('updatecart');
Route::post('/order', [HomeController::class, 'confirmbookings'])->name('confirmbookings');
//bookings Route
Route::post('/book/{id}', [HomeController::class, 'book'])->name('book');

// About us page Route
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');


//Contact us Routes
Route::get('/contact', [ContactController::class, 'contact'])->name('contactus');
Route::post('/store/message', [ContactController::class, 'storemessage'])->name('store.message');
// customer Routes
Route::get('/customer', [AdminController::class, 'customer'])->name('customer');



//Payment Routes

Route::get('/payment', [AdminController::class, 'payment'])->name('payment');
Route::get('/payment-count',[AdminController::class,'paymentCount'])->name('payment-count');

//Paypal important route
Route::get('/processSuccess', [HomeController::class, 'processSuccess'])->name('processSuccess');
Route::get('/processCancel', [HomeController::class, 'processCancel'])->name('processCancel');
Route::get('/read-terms-condition',[HomeController::class,'generatepdf'])->name('read-terms-condition');
