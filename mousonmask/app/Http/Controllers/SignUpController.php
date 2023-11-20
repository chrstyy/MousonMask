<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{

    public function showSignUpForm()
    {
        return view('auth.signup');
    }

    public function signUp(Request $request)
    {
        // Validasi request

        // Proses penyimpanan user ke database

        return redirect()->route('home');
    }

}

