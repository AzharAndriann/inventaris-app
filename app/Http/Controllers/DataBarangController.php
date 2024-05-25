<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use App\Models\DataPemakaian;
use App\Models\DataPembelian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataBarangController extends Controller
{
    public function data_barang(){
        $data = DataBarang::all();
        
        return view('databarang.databarang', compact('data'));
    }

    public function delete_data_barang($kode_barang){
        DataBarang::where('kode_barang',$kode_barang)->delete();
        DataPembelian::where('kode_barang',$kode_barang)->delete();
        return redirect()->back();
    }
}
