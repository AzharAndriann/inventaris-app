<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use App\Models\DataRuang;
use App\Models\GenerateLaporan;
use Illuminate\Http\Request;

class GenerateLaporanController extends Controller
{

    public function add_laporan()
    {
        $barang = DataBarang::all();
        $ruang = DataRuang::all();
        return view('generatelaporan.tambah-generatelaporan',compact('barang','ruang'));
    }

    public function store_laporan(Request $request)
    {
        $data = ([
            'nama_barang'           => $request->nama_barang,
            'jumlah_barang'         => $request->jumlah_barang,
            'tanggal_pembelian'     => $request->tanggal_pembelian,
            'tanggal_pemakaian'     => $request->tanggal_pemakaian,
            'ruangan'               => $request->ruangan,
        ]);

        GenerateLaporan::create($data);
        return redirect()->route('admin.dashboard');
    }
}
