<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenerateLaporan extends Model
{
    use HasFactory;

    protected $table = 'generate_laporans';

    protected $fillable = [
        'nama_barang',
        'nama_pemakai',
        'tanggal_pembelian',
        'tanggal_pemakaian',
        'ruangan',
    ];
}
