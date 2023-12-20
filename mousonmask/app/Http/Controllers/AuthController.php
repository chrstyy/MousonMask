<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        // Implement signup logic here
        // ...

        return redirect()->route('signup');
    }
}
