<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // app/Http/Controllers/Auth/LoginController.php
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi login

        // Redirect ke halaman home jika berhasil

        return redirect()->route('home');
    }

}
