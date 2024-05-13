<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'transaction_total',
        'transaction_status',
        'total_payment',
        'return'
    ];

    public function transactionDetails()
    {
        return $this->hasMany(TransactionDetail::class, 'transaction_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'users_id','id');
    }

    public function getTotalPriceAttribute()
    {
        return $this->transactionDetails->sum('price_produk') * $this->transactionDetails->sum('quantity');
    }
}
