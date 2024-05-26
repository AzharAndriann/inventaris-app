<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPemakaian extends Model
{
    use HasFactory;

    protected $table = 'data_pemakaians';

    protected $fillable = [
        'kode_pemakaian',
        'kode_barang',
        'nama_barang',
        'nama_pemakai',
        'jumlah_pakai',
        'tanggal_pakai',
        'nama_ruangan',
        'keterangan',
    ];
}
