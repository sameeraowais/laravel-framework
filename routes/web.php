<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\MailController;


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

/*
Route::get('/', function () {
    return view('index');
});
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/', [PhoneController::class,"GetPhoneData"]);

Route::get('/checkout/{id}', [PhoneController::class,"GetPhoneDataid"])->name("cart");

Route::POST('/getinvoice', [PhoneController::class,"getInvoice"])->name("getinvoice");

Route::get('/invoice', function () {
    return view('invoice');
});

Route::get('/sendmail', [MailController::class, 'sendMail']);

