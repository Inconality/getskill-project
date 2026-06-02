<?php

namespace App\Http\Controllers;

use App\Models\Costumer;
use Illuminate\Http\Request;

class CostumerController extends Controller
{
    public function index(){
        $costumers = Costumer::all();
        return view('admin.pages.pelanggan.index', compact('costumers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan'    => 'required|string|max:255',
            'no_telepon'        => 'required|string|max:14',
            'alamat'            => 'required|string',
            'email'             => 'required|email',
            'tanggal_daftar'    => 'required|date'
        ]);

        $data = $request->all();
        Costumer::create($data);

        return redirect()->route('pelanggan.index')->with('success', 'Data Pelanggan berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pelanggan'    => 'required|string|max:255',
            'no_telepon'        => 'required|string|max:14',
            'alamat'            => 'required|string',
            'email'             => 'required|email',
            'tanggal_daftar'    => 'required|date'
        ]);

        $costumer = Costumer::findOrFail($id);
        $data = $request->all();
        $costumer->update($data);
        return redirect()->route('pelanggan.index')->with('success', 'Data Pelanggan berhasil diubah!');
    }

    public function destroy($id)
    {
        $costumer = Costumer::findOrFail($id);
        $costumer->delete();

        return redirect()->route('pelanggan.index')->with('success', 'Data Pelanggan berhasil dihapus!');
    }
}