<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MyAccController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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


Route::get('/home', function () {
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

// Route::get('/menu', function () {
//     return view('menu');
// })->name('menu');

Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/payment', function(){
    return view('payment');
})->name('payment');

Route::get('/myacc', function () {
    return view('myacc');
})->name('myacc');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/myacc', [MyAccController::class, 'showWishlist'])->name('myacc.show');
Route::post('/wishlist/add/{menuId}', [MyAccController::class, 'addToWishlist'])->name('wishlist.add');
Route::post('/wishlist/remove/{menuId}', [MyAccController::class, 'removeFromWishlist'])->name('wishlist.remove');

Route::resource('/home', HomeController::class)->middleware(['auth','verified']);
Route::resource('/menu', MenuController::class)->middleware(['auth','verified']);


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{idMenu}', [CartController::class, 'addToCart'])->name('cart.addToCart');
Route::get('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');

Route::get('/order', [CartController::class, 'showOrder']);
