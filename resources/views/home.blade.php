<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Daftar Barang</h1>
    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <input type="text" name="nama_barang" placeholder="Nama Barang" required>
        <select name="jenis_barang" required>
            <option value="" disabled selected>Pilih Jenis Barang</option>
            <option value="MAKANAN RINGAN">MAKANAN RINGAN</option>
            <option value="MAKANAN BERAT">MAKANAN BERAT</option>
        </select>
        <input type="number" name="stok" placeholder="Stok" min="0">
        <input type="number" name="harga_satuan" placeholder="Harga Satuan">
        <select name="status">
            <option value="" disabled selected>Status</option>
            <option value="TERSEDIA">TERSEDIA</option>
            <option value="KOSONG">KOSONG</option>
        </select>
        <button type="submit">Tambah</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Jenis Barang</th>
                <th>Stok</th>
                <th>Harga Satuan</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barang as $barang)
                <tr>
                    <td>{{ $barang->id }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->jenis_barang }}</td>
                    <td>{{ $barang->stok }}</td>
                    <td>{{ $barang->harga_satuan }}</td>
                    <td>{{ $barang->status }}</td>
                    <td>
                        <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                        <a href="{{ route('barang.edit', $barang->id) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
