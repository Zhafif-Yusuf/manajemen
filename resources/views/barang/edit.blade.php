@extends('layouts.app')

@section('content')
    <h2 style="text-align: center;">Edit Barang</h2>
    
    <form action="{{ route('barang.update', $barang->id) }}" method="POST">
        @csrf
        @method('PUT') 
        
        <div>
            <label for="nama_barang">Nama Barang</label>
            <input type="text" name="nama_barang" value="{{ $barang->nama_barang }}" required>
        </div>
        
        <div>
            <label for="jenis_barang">Jenis Barang</label>
            <input type="text" name="jenis_barang" value="{{ $barang->jenis_barang }}" required>
        </div>

        <div>
            <label for="stok">Stok</label>
            <input type="number" name="stok" value="{{ $barang->stok }}" min="0">
        </div>

        <div>
            <label for="harga_satuan">Harga Satuan</label>
            <input type="number" name="harga_satuan" value="{{ $barang->harga_satuan }}" min="0">
        </div>

        <div>
            <label for="status">Status</label>
            <select name="status" required>
                <option value="available" {{ $barang->status == 'available' ? 'selected' : '' }}>READY</option>
                <option value="unavailable" {{ $barang->status == 'unavailable' ? 'selected' : '' }}>KOSONG</option>
            </select>
        </div>

        <button type="submit">Update</button>
    </form>
@endsection
