<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Http\Requests\ProdukRequest;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::all();
        return view('admin.produk.index', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProdukRequest $request)
    {
        $data = $request->all();
        $data['foto_makanan'] = $request->file('foto_makanan')->store('assets/gallery','public');
        Produk::create($data);
        // return response()->json([
        //     'message' => 'data berhasil dibuat'
        // ]);
        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = Produk::findorfail($id);
        return view('admin.produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProdukRequest $request, Produk $produk)
    {
        $data = $request->all();
        
        if ($request->hasFile('foto_makanan')) {
            // Jika ada, simpan gambar baru
            $data['foto_makanan'] = $request->file('foto_makanan')->store('assets/gallery', 'public');
        }

        $item = Produk::findOrFail($produk->id);
        $item->update($data);

        // return response()->json([
        //     'message' => 'Data berhasil diubah'
        // ]);

        return redirect()->route('produk.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Produk::findorfail($id);
        $item->delete();

        return response()->json([
            'message' => 'la tehapus'
        ]);
    }
}
