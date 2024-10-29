<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barangs';

    protected $fillable = [
        'nama_barang',
        'stok',
        'kategori',
        'tanggal_masuk',
        'tersedia',
    ];

    // Relasi One-to-Many dengan model Penjualan
    public function penjualans()
    {
        return $this->hasMany(Penjualan::class, 'barang_id');
    }
}