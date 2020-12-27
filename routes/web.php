<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SslCommerzPaymentController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::post('/login', [UserController::class,'login']);
Route::get('/', [ProductController::class,'index']);
Route::get('detail/{id}', [ProductController::class,'detail']);
Route::get('/search', [ProductController::class,'search']);

Route::post('/add_to_cart', [ProductController::class,'addToCart']);
Route::get('/cartlist', [ProductController::class,'cartList']);

Route::get('removeCart/{id}', [ProductController::class,'removeCart']);

Route::get('order', [ProductController::class,'order']);




// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('example2/{id}', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);


Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END
