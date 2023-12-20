<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{

   public function showSignUpForm()
    {
        return view('signup.signup');
    }

    public function processSignUp(Request $request)
    {
        // Validasi data formulir signup di sini
        // Simpan data ke database atau lakukan tindakan lainnya

        return redirect('/')->with('success', 'Pendaftaran berhasil!');
    }

}

