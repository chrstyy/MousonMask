<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        // Proses validasi dan otentikasi user
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // kalo otentikasi berhasil
            $user = Auth::user();
            session(['username' => $user->username]);

            return redirect()->intended('/home');
        } else {
            // kalo ndak
            return back()->withErrors(['username' => 'Invalid credentials']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }

}
