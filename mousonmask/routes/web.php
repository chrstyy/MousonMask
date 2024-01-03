<?php

use App\Http\Controllers\MyAccController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;

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
Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('home');
})->name('home');


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/google', function () {
    return view('continue.google');
})->name('google');

Route::get('/phone', function () {
    return view('continue.phone');
})->name('phone');

Route::get('/about', function () {
    return view('about.about');
})->name('about');

Route::get('/terms', function () {
    return view('about.termsAndConditions');
})->name('terms');

Route::get('/privacy', function () {
    return view('about.privacyPolicy');
})->name('privacy');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/payment', 'PaymentController@showPaymentPage')->name('payment');

Route::get('/myacc', function () {
    return view('myacc');
})->name('myacc');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/myaccount', [MyAccController::class, 'showWishlist'])->name('myaccount.show');
Route::post('/wishlist/add/{menuId}', [MyAccController::class, 'addToWishlist'])->name('wishlist.add');
Route::post('/wishlist/remove/{menuId}', [MyAccController::class, 'removeFromWishlist'])->name('wishlist.remove');
