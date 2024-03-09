<?php

namespace App\Http\Controllers\Kasir;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;

class ListController extends Controller
{
    public function index()
    {
        return view('cashier.index');
    }
}
