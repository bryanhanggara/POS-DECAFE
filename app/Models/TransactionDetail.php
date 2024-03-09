<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'produk_id',
        'price_produk',
        'qty_produk'
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaksi::class, 'transaction_id','id');
    }

    public function product()
    {
        return $this->belongsTo(Produk::class, 'produk_id','id');
    }

}
