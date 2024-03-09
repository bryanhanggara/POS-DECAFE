<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_makanan',
        'harga',
        'stok',
        'foto_makanan',
        'category'
    ];

    public function transactionDetails()
    {
        return $this->hasMany(TransaksiDetail::class, 'produk_id','id');
    }

    
}
