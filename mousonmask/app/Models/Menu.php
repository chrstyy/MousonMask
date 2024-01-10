<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
     protected $table = 'table_makanan';
     protected $fillable = ['name', 'price', 'image'];
    public function showMenu()
    {
        $menus = Menu::all();
        return view('menu', compact('menus'));
    }

    public function detailPesanan()
    {
        return $this->hasMany(DetailPesanan::class, 'id_menu');
    }
}
