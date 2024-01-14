<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //  protected $table = 'table_makanan';
    // protected $table = '';
    //  protected $fillable = ['name', 'price', 'image'];
    // public function showMenu()
    // {
    //     $menus = Menu::all();
    //     return view('menu', compact('menus'));
    // }

    // public function detailPesanan()
    // {
    //     return $this->hasMany(DetailPesanan::class, 'id_menu');
    // }



    use HasFactory;

    protected $table = 'menus';
    protected $primaryKey = 'id_menu';

    protected $fillable = [
        'name',
        'price',
        'image',
    ];
}
