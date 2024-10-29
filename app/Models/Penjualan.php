<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        'barang_id',
        'jumlah_penjualan', // Ganti dari jumlah_transaksi menjadi jumlah_penjualan
        'tanggal_penjualan', // Ganti dari tanggal_transaksi menjadi tanggal_penjualan
    ];

    // Relasi dengan model Barang
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id');
    }
}