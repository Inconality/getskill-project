<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.pages.produk.index', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga'       => 'required|numeric',
            'stok'        => 'required|integer',
            'deskripsi'   => 'nullable|string',
            'gambar'      => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('products', 'public');
        }

        Product::create($data);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga'       => 'required|numeric',
            'stok'        => 'required|integer',
            'deskripsi'   => 'nullable|string',
            'gambar'      => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $product = Product::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($product->gambar) {
                Storage::disk('public')->delete($product->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('products', 'public');
        }

        $product->update($data);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil diubah!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        
        if ($product->gambar) {
            Storage::disk('public')->delete($product->gambar);
        }

        $product->delete();

        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus!');
    }
}