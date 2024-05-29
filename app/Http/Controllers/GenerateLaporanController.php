<?php

namespace App\Http\Controllers;

use App\Exports\DataPemakaianTanggal;
use App\Exports\ExportMulti;
use App\Exports\UsersExport;
use App\Models\DataBarang;
use App\Models\DataRuang;
use App\Models\GenerateLaporan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

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
            'nama_pemakai'          => $request->nama_pemakai,
            'jumlah_barang'         => $request->jumlah_barang,
            'tanggal_pembelian'     => $request->tanggal_pembelian,
            'tanggal_pemakaian'     => $request->tanggal_pemakaian,
            'ruangan'               => $request->ruangan,
        ]);

        GenerateLaporan::create($data);
        return redirect()->route('admin.dashboard');
    }

    public function delete_laporan($id)
    {
        GenerateLaporan::where('id',$id)->delete();
        return redirect()->back();
    }

    public function export() 
    {
        return Excel::download(new ExportMulti, 'Laporan.xlsx');
        
    }

    public function export_date(Request $request)
    {
        $tanggal = $request->input('tanggal');
        return Excel::download(new DataPemakaianTanggal($tanggal), 'datapemakaiantgl.xlsx');
    }


}
