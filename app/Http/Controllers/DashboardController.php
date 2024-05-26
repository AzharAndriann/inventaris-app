<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use App\Models\DataPemakaian;
use App\Models\DataPembelian;
use App\Models\GenerateLaporan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if(auth()->user()->can('view_dashboard_admin')){
            $dataPembelianAll = DataPembelian::count();
            $dataBarangAll = DataBarang::count();
            $dataUserAll = User::count();
            $dataPemakaianAll = DataPemakaian::count();
            $generate = GenerateLaporan::all();
            
            $username = Auth::user()->name;
            return view('admin.dashboard-admin',compact('dataPembelianAll','dataBarangAll','generate','dataUserAll','dataPemakaianAll'));
        }elseif(auth()->user()->can('view_dashboard_operator')){
            $dataPembelianAll = DataPembelian::count();
            $dataBarangAll = DataBarang::count();
            $dataUserAll = User::count();
            $dataPemakaianAll = DataPemakaian::count();
            return view('operator.dashboard-operator',compact('dataPembelianAll','dataBarangAll','dataUserAll','dataPemakaianAll'));
        }else{
            $dataPembelianAll = DataPembelian::count();
            $dataBarangAll = DataBarang::count();
            $dataUserAll = User::count();
            $dataPemakaianAll = DataPemakaian::count();
            return view('petugas.dashboard-petugas',compact('dataPembelianAll','dataBarangAll','dataUserAll','dataPemakaianAll'));
        }
    }
}
