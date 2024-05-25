<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use App\Models\DataPemakaian;
use App\Models\DataRuang;
use Illuminate\Http\Request;

class DataPemakaianController extends Controller
{
    public function data_pemakaian()
    {
        $data = DataPemakaian::all();


        return view('datapemakaian.datapemakaian',compact('data'));
    }

    public function add_pemakaian()
    {
        $barang = DataBarang::all();
        $ruang = DataRuang::all();
        return view('datapemakaian.tambah-datapemakaian',compact('barang','ruang'));
    }

    public function store_pemakaian(Request $request)
    {
        $barang = DataBarang::where('nama_barang',$request ->nama_barang)->first();
        if($barang ->jumlah >= $request->jumlah_pakai){
            $barang ->jumlah = $barang ->jumlah - $request ->jumlah_pakai;
            $datapemakaian = ([
                'kode_pemakaian' => $request ->kode_pemakaian,
                'nama_barang' => $request ->nama_barang,
                'nama_ruangan' => $request ->nama_ruangan,
                'jumlah_pakai' => $request ->jumlah_pakai,
                'tanggal_pakai' => $request ->tanggal_pakai,
                'pemakaian' => $request ->pemakaian,
                'keterangan' => $request ->keterangan,
            ]);
    
            $barang->save();
    
            if(DataPemakaian::create($datapemakaian)){
                return redirect()->route('admin.data-pemakaian')->with('success', "Data Berhasil Disimpan");
            }else{
                return redirect()->back();
            }
        }else{
            return redirect()->route('admin.data-pemakaian')->with('failed', "Data Berhasil Disimpan");
        }
    }

    public function delete_pemakaian($id){
        DataPemakaian::where('id',$id)->delete();
        return redirect()->back();
    }

}
