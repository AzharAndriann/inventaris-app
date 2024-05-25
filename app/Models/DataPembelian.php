<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPembelian extends Model
{
    use HasFactory;

    protected $table = 'data_pembelians';

    protected $fillable = [
        'kode_pembelian',
        'kode_barang',
        'nama_barang',
        'merk',
        'jumlah',
        'harga',
        'total',
        'tanggal_pembelian',
    ];

    public function Barang()
    {
        return $this->hasMany(DataBarang::class);
    }
}
