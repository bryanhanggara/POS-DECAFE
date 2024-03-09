<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function addToCart(Request $request, $productId)
    {
       
        $product = Produk::find($productId);
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        $cart = session()->get('cart', []);
        $cart[] = [
            'product_id' => $product->id,
            'product_name' => $product->nama_makanan,
            'product_price' => $product->harga,
            'quantity' => 1, 
        ];
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart.');
    }

    public function removeFromCart($productId)
    {
        $cartItems = session()->get('cart', []);

        foreach ($cartItems as $key => $item) {

        if (isset($item['product_id']) && $item['product_id'] == $productId) {
            unset($cartItems[$key]);
            break;
        }
    }
            session()->put('cart', $cartItems);
            return redirect()->back()->with('success', 'Product removed from cart successfully.');
    }

    public function showCart()
    {
        $cartItems = session()->get('cart', []);
        $products = [];
        $totalPrice = 0;

        
        if (!empty($cartItems)) {
            $groupedProducts = collect($cartItems)->groupBy('product_id');
            
            foreach ($groupedProducts as $productId => $items) {
        
                $product = Produk::find($productId);
        
                if ($product) {
                    $totalQuantity = $items->sum('quantity');
                    $product->quantity = $totalQuantity;
                    $totalSubPrice = $product->quantity * $product->harga;
                    $totalPrice += $product->harga * $totalQuantity;

                    $products[] = $product;
                }
            }
        }

        return view('cart', compact('products', 'totalPrice'));
    }

    public function store(Request $request)
    {
        $userId = auth()->id();

        \DB::transaction(function() use($request, $userId){
            $transaksi = Transaction::create([
                'users_id' => $userId,
                'transaction_total' => 0,
                'transaction_status' => 'created',
                'total_payment' => 0,
                'return' => 0,
            ]);
            foreach($request->input('cart') as $item) {
                TransactionDetail::create([
                    'transaction_id' => $transaksi->id,
                    'produk_id' => $item['produk_id'],
                    'price_produk' => Produk::find($item['produk_id'])->harga,
                    'qty_produk' => $item['qty'],
                ]);
    
                Produk::find($item['produk_id'])->update([
                    'qty_produk' => Produk::find($item['produk_id'])->qty_produk - $item['qty_produk'],
                ]);
    
                $transaksi->transaction_total += ($item['qty_produk'] * Produk::find($item['produk_id'])->harga);
                $transaksi->total_payment += ($item['qty_produk'] * Produk::find($item['produk_id'])->harga);
        
            }

            $transaksi->transaction_status = 'paid';
            $transaksi->save();
        });

        return response()->json(['message' => 'Transaksi berhasil dibuat'], 201);
    }

    


}
