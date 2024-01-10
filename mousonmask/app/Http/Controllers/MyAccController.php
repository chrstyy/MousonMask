<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Customer;

class MyAccController extends Controller
{
    public function showWishlist(){
        $user = User::find(auth()->id());
        $wishlist = $user->wishlist;
        $menus = Menu::all();

        return view('myacc', compact('wishlist', 'menus'));
    }

    public function index()
    {
        $user = Auth::user();
        $customer = Customer::where('id_user', $user->id)->first();
        return view('myacc', compact('user', 'customer'));
    }
}
