<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Produk;

class Searching extends Component
{
    public $search = '';
    public $category = '';

    public function updateCategory($selectedCategory)
    {
        $this->category = $selectedCategory;
        $this->render();
    }

    public function render()
    {   
        // Ambil produk berdasarkan pencarian dan kategori
        $produks = Produk::query()
            ->when($this->search, function ($query) {
                $query->where('nama_makanan', 'like', '%' . $this->search . '%')
                    ->orWhere('category', 'like', '%' . $this->search . '%');
            })
            ->when($this->category, function ($query) {
                $query->where('category', $this->category);
            })
            ->get();

        // Ambil daftar kategori
        $categories = Produk::distinct('category')->pluck('category');


        return view('livewire.searching', [
            'produks' => $produks,
            'categories' => $categories
        ]);
    }
}
