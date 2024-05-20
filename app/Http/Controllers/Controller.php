<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function dashboard()
    {
        if(auth()->user()->can('view_dashboard_admin')){
            $username = Auth::user()->name;
            return view('/admin.dashboard-admin',compact('username'));
        }elseif(auth()->user()->can('view_dashboard_operator')){
            return view('/operator.dashboard-operator');
        }else{
            return view('/petugas.dashboard-petugas');
        }
    }

    public function navbar()
    {
        $username = Auth::user()->username;
        $user = User::where('username', $username)->first();
        return view('/navbar', [
            'user' => $user
        ]);

    }
}
