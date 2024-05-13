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

    public function store()
    {
        $cartItems = session()->get('cart', []);
        $totalPrice = 0;

        foreach ($cartItems as $item) {
            $product = Produk::find($item['product_id']);
    
            if ($product) {
                $totalQuantity = $item['quantity'];
                $totalPrice += $product->harga * $totalQuantity;

                $product->stok -= $item['quantity'];
                $product->save();
            }
        }
        $transaction = new Transaction();
        $transaction->users_id = auth()->user()->id; 
        $transaction->transaction_status = 'Success';
        $transaction->transaction_total = $totalPrice;
        $transaction->total_payment = 0; 
        $transaction->return = 0;
        $transaction->save();

        if (!empty($cartItems)) {

            $groupedProducts = collect($cartItems)->groupBy('product_id');
            
            foreach ($groupedProducts as $productId => $items) {
        
                $product = Produk::find($productId);
        
                if ($product) {
                    $totalQuantity = $items->sum('quantity');
                    $product->quantity = $totalQuantity;
                    $totalSubPrice = $product->quantity * $product->harga;
                    $totalPrice += $product->harga * $totalQuantity;

                    $transactionDetail = new TransactionDetail();
                    $transactionDetail->transaction_id = $transaction->id;
                    $transactionDetail->produk_id = $product->id;
                    $transactionDetail->price_produk = $totalSubPrice;
                    $transactionDetail->qty_produk = $totalQuantity;
                    $transactionDetail->save();
                }
               
            }

            session()->forget('cart');

            // return response()->json(['masuk']);
            return redirect()->route('history');
        } else {
            return response()->json(['koosong']);
        }


    }

}
