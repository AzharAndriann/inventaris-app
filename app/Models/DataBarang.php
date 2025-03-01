<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBarang extends Model
{
    use HasFactory;

    protected $table = 'data_barangs';

    protected $fillable = [
        'kode_pembelian',
        'kode_barang',
        'nama_barang',
        'merk',
        'jumlah',
        'harga',
        'total',
    ];

    
}
