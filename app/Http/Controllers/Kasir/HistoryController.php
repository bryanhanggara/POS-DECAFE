<?php

namespace App\Http\Controllers\Kasir;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\TransactionDetail;

class HistoryController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();
        return view('cashier.history', compact('transactions'));
    }

    public function show($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transactionDetails = $transaction->transactionDetails;
        return view('cashier.invoice', compact('transaction', 'transactionDetails'));
    }

}
