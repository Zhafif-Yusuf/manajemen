<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tabel_barang', function (Blueprint $table) {
            $table->id(); 
            $table->string('nama_barang', 100); 
            $table->string('jenis_barang', 100); 
            $table->integer('stok')->nullable(); 
            $table->string('status', 20)->nullable(); 
            $table->integer('harga_satuan')->nullable(); 
            $table->timestamps(); 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tabel_barang');
    }
};
