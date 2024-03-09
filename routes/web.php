<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [\App\Http\Controllers\Kasir\ListController::class,'index'])->middleware('auth')->name('listmenu');
Route::get('/history', [\App\Http\Controllers\Kasir\HistoryController::class,'index'])->middleware('auth')->name('history');
// Route::post('/cart/add/{id}', [\App\Http\Controllers\CheckoutController::class,'store'])->name('cart.add');

Route::post('/cart/add/{productId}', [\App\Http\Controllers\CheckoutController::class, 'addToCart'])->name('cart.add');
Route::get('/cart/show', [\App\Http\Controllers\CheckoutController::class, 'showCart'])->name('cart.show');
Route::delete('/cart/remove/{productId}', [\App\Http\Controllers\CheckoutController::class, 'removeFromCart'])->name('cart.remove');


Route::prefix('admin')->middleware('auth','isAdmin')->group(function() {
    Route::resource('/produk', \App\Http\Controllers\ProdukController::class);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
