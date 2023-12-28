<?php

use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;

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
Route::get('/profile', function () {
    return view('Profile');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/home', function () {
    return view('home');
});

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/google', function () {
    return view('google');
})->name('google');

Route::get('/phone', function () {
    return view('phone');
})->name('phone');

Route::get('/about', function () {

    return view('about.about');
})->name('about');

<<<<<<< Updated upstream
Route::get('/terms', function () {
    return view('about.termsAndConditions');
})->name('terms');

Route::get('/privacy', function () {
    return view('about.privacyPolicy');
})->name('privacy');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
=======
Route::get('/landing', function () {
    return view('landing');
})->name('landing');
>>>>>>> Stashed changes

Route::post('/signup', 'AuthController@signup')->name('signup.post');
