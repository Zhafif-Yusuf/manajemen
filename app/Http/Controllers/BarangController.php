<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all(); 
        return view('home', compact('barang')); 
    }

   
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_barang' => 'required|string|max:100', 
            'jenis_barang' => 'required|string|max:100', 
            'stok' => 'nullable|integer|max:99999', 
            'harga_satuan' => 'nullable|integer|max:9999999999', 
            'status' => 'nullable|string|max:20', 
        ]);

        
        Barang::create($request->all());

        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan.'); // Redirect ke daftar barang
    }


    public function edit($id)
{
    $barang = Barang::findOrFail($id); 
    return view('barang.edit', compact('barang')); 
}

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:100',
            'jenis_barang' => 'required|string|max:100',
            'stok' => 'nullable|integer|max:99999',
            'harga_satuan' => 'nullable|integer|max:9999999999',
            'status' => 'nullable|string|max:20',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->update($request->all()); 

        return redirect()->route('barang.index')->with('success', 'Barang berhasil diperbarui.'); // Redirect ke daftar barang
    }

    
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id); 
        $barang->delete();

        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus.'); // Redirect ke daftar barang
    }
    
}
