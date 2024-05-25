<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataRuang extends Model
{
    use HasFactory;

    protected $table = 'ruangans';

    protected $fillable = [
        'kode_ruangan',
        'nama_ruangan',
    ];
}
