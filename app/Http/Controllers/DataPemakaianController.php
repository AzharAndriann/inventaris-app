<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Models\DataBarang;
use App\Models\DataPemakaian;
use App\Models\DataRuang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class DataPemakaianController extends Controller
{
    public function data_pemakaian()
    {
        $data = DataPemakaian::all();


        return view('datapemakaian.datapemakaian',compact('data'));
    }

    public function add_pemakaian()
    {
        if(auth()->user()->can('view_dashboard_admin')){
            $barang = DataBarang::all();
            $ruang = DataRuang::all();
            $username = Auth::user()->name;
            return view('datapemakaian.tambah-datapemakaian',compact('barang','ruang','username'));
        }elseif(auth()->user()->can('view_dashboard_operator')){
            $barang = DataBarang::all();
            $ruang = DataRuang::all();
            $username = Auth::user()->name;
            return view('datapemakaian.tambah-datapemakaian',compact('barang','ruang','username'));
        }else{
            return redirect()->back();
        }

    }

    public function store_pemakaian(Request $request)
    {
        $barang = DataBarang::where('nama_barang',$request ->nama_barang)->first();
        if($barang ->jumlah >= $request->jumlah_pakai){
            $barang ->jumlah = $barang ->jumlah - $request ->jumlah_pakai;
            $datapemakaian = ([
                'kode_pemakaian' => $request ->kode_pemakaian,
                'nama_barang' => $request ->nama_barang,
                'nama_pemakai' => $request ->nama_pemakai,
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
            return redirect()->back()->with('failed', "Data Berhasil Disimpan");
        }
    }

    public function edit_pemakaian($id)
    {
        $barang = DataBarang::all();
        $ruang = DataRuang::all();
        $username = Auth::user()->name;
        $data = DataPemakaian::where('id',$id)->first();
        return view('datapemakaian.edit-datapemakaian',compact('barang','ruang','username','data'));
    }


    public function update_pemakaian(Request $request,$id)
    {
        $data = ([
            'nama_barang'       => $request->nama_barang,
            'jumlah_pakai'      => $request->jumlah_pakai,
            'nama_ruangan'      => $request->nama_ruangan,
            'keterangan'        => $request->keterangan,
            'tanggal_pakai'     => $request->tanggal_pakai,
        ]);
        

        DataPemakaian::where('id',$id)->update($data);
        return redirect()->back();
    }

    public function delete_pemakaian($id){
        DataPemakaian::where('id',$id)->delete();
        return redirect()->back();
    }

    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
        
    }

}
