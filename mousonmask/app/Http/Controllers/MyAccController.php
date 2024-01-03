<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class MyAccController extends Controller
{
    public function addToWishlist($menuId) {
        $user = Auth::user();
        $user->wishlist()->attach($menuId);
        return redirect()->back()->with('success', 'Menu added to wishlist.');
    }

    public function removeFromWishlist($menuId)  {
        $user = Auth::user();
        $user->wishlist()->detach($menuId);
        return redirect()->back()->with('success', 'Menu removed from wishlist.');
    }

    public function showWishlist(){
        $user = User::find(auth()->id());
        $wishlist = $user->wishlist;
        $menus = Menu::all();

        return view('myacc', compact('wishlist', 'menus'));
    }
}
