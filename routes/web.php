<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnqController;

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

Route::get('/', function () {
    return view('landing/home');
});

Route::get('/about-us', function () {
    return view('landing/about');
});
Route::get('/listing', function () {
    return view('landing/listing');
});
Route::get('/faq', function () {
    return view('landing/faq');
});
Route::get('/contact', function () {
    return view('landing/contact');
});



Auth::routes(['register' => false]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact-enq', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');


Route::post('/listing/enquiry', [App\Http\Controllers\EnqController::class, 'listing'])->name('listing.form');
Route::post('/contact/enquiry', [App\Http\Controllers\EnqController::class, 'contact'])->name('contact.form');
