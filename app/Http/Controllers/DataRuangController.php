<?php

namespace App\Http\Controllers;

use App\Models\DataRuang;
use Illuminate\Http\Request;

class DataRuangController extends Controller
{
    public function data_ruang()
    {
        $ruang = DataRuang::all();

        return view('dataruangan.dataruangan',compact('ruang'));
    }

    public function add_ruang()
    {
        return view('dataruangan.tambah-dataruangan');
    }

    public function store_ruang(Request $request)
    {
        $ruang = ([
            'kode_ruangan' => $request->kode_ruangan,
            'nama_ruangan' => $request->nama_ruangan,
        ]);

        DataRuang::create($ruang);
        return redirect()->route('admin.data-ruang');
    }

    public function edit_ruang($id)
    {
        $ruang = DataRuang::findOrFail($id);
        return view('dataruangan.edit-dataruangan',compact('ruang'));
    }

    public function update_ruang(Request $request,$id)
    {
        $ruang = ([
            'kode_ruangan' => $request->kode_ruangan,
            'nama_ruangan' => $request->nama_ruangan,
        ]);

        dd($ruang);

        DataRuang::where('id',$id)->update($ruang);
        return redirect()->route('admin.data-ruang');
    }

    public function delete_ruang($id)
    {
        DataRuang::where('id',$id)->delete();

        return redirect()->route('admin.data-ruang');
    }
}
