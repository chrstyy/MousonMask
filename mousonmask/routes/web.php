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
    return view('login.login');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/signup', [SignUpController::class, 'showSignUpForm']);
Route::post('/signup', [SignUpController::class, 'processSignUp']);

