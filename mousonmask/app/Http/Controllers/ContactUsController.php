<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    // app/Http/Controllers/ContactUsController.php
    public function index()
    {
        return view('contactus');
    }

}
