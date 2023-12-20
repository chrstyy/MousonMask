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

Route::get('/signin', function () {
    return view('signin');
})->name('signin');

Route::get('/signup', function () {
    return view('signup.signup');
})->name('signup');

Route::get('/google', function () {
    return view('google');
})->name('google');

Route::get('/phone', function () {
    return view('phone');
})->name('phone');

Route::post('/signup', 'AuthController@signup')->name('signup.post');
