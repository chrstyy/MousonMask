<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    // public function customer()
    // {
    //     return $this->belongsTo(Customer::class, 'id_customer');
    // }

    public function detailPesanan()
    {
        return $this->hasMany(DetailPesanan::class, 'id','id_order');
    }


    use HasFactory;

    protected $table = 'orders';
    protected $primaryKey = 'id_order';

    protected $fillable = [
        'tanggal_order',
        'status',
        'id_menu',
    ];

    public function menus()
    {
        return $this->belongsTo(Menu::class,'id_menu','id');
    }
}
