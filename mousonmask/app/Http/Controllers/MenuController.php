<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function showMenu($category)
    {
        // Ambil data menu sesuai kategori

        return view('menu.index', ['menu' => $menu]);
    }

}
