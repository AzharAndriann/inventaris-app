<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Models\DataBarang;
use App\Models\DataPembelian;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DataPembelianController extends Controller
{
    public function data_pembelian(Request $request)
    {
        $data = DataPembelian::all();
        return view('datapembelian.datapembelian',compact('data'));
    }

    public function add_pembelian()
    {

        return view('datapembelian.tambah-datapembelian');
    }

    public function store_pembelian(Request $request)
    {
        $data = ([
            'kode_pembelian'        => $request->kode_pembelian,
            'kode_barang'           => $request->kode_barang,
            'nama_barang'           => $request->nama_barang,
            'merk'                  => $request->merk,
            'harga'                 => $request->harga,
            'jumlah'                => $request->jumlah,
            'tanggal_pembelian'     => $request->tanggal_pembelian,
            'total'             => $request->harga * $request->jumlah,
        ]);
        
       if($datapembelian = DataPembelian::create($data)){

        $kode_pembelian = DataBarang::where('kode_barang',$request->kode_barang)->first();

        if($kode_pembelian){
            $kode_pembelian->jumlah += $request->jumlah;
            $kode_pembelian->total = $request->jumlah * $request->harga;
            $kode_pembelian->save();

            return redirect()->route('admin.data-pembelian');
        } else {
            $storeBarang = ([
                'kode_barang'       => $request->kode_barang,
                'kode_pembelian'    => $request->kode_pembelian,
                'nama_barang'       => $request->nama_barang,
                'merk'              => $request->merk,
                'jumlah'            => $request->jumlah,
                'harga'             => $request->harga,
                'total'             => $request->jumlah * $request->harga,
            ]);

            DataBarang::create($storeBarang);
            return redirect()->route('admin.data-pembelian');
        }

       }
    }
    public function edit_data_pembelian($kode_pembelian)
    {
       $data = DataPembelian::where('kode_pembelian',$kode_pembelian)->first();

        return view('datapembelian.edit-datapembelian',compact('data'));
    }

    public function update_data_pembelian(Request $request,$kode_pembelian)
    {
        $data = ([
            'nama_barang' => $request->nama_barang,
            'merk'        => $request->merk,
            'harga'       => $request->harga,
            'jumlah'      => $request->jumlah,
            'bulan'       => $request->bulan,
            'total'       => $request->harga * $request->jumlah,
        ]);

        DataPembelian::where('kode_pembelian',$kode_pembelian)->update($data);
        return redirect()->back();
    }

    public function delete_data_pembelian($kode_pembelian)
    {

        DataPembelian::where('kode_pembelian',$kode_pembelian)->delete();
        return redirect()->back();
    }


}
