<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPesanan extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function order()
    {
        return $this->belongsTo(Order::class, 'id_order');
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu');
    }



    use HasFactory;

    protected $table = 'detail_pesanans';
    // protected $primaryKey = 'id_detail';
    protected $fillable = ['jumlah', 'subtotal', 'id_order', 'id_user'];
}
