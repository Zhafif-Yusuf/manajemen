<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'tabel_barang';

    protected $fillable = [
        'nama_barang',
        'jenis_barang',
        'stok',
        'harga_satuan',
        'status',
    ];
}
