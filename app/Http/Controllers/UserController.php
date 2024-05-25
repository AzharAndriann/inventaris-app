<?php

namespace App\Http\Controllers;

use App\Models\DataPembelian;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function data_user(){
        $user = User::all();
        return view('datauser.data_user',compact('user'));
    }

    public function add_user()
    {
        $role = Role::where('guard_name' , 'web')->get();
        return view('datauser.tambah_user' ,compact('role'));
    }

    public function store_user(Request $request)
    {
        $user = ([
            'name'      => $request->name,
            'username'  => $request->username,
            'password'  => Hash::make($request->password),
        ]);

        $userR['role']  = $request->role;
        $new_user = User::create($user);
        $new_user->syncRoles([$userR]);
        return redirect()->route('admin.data-user');
    }

    public function edit_user($id){
        $user = User::findOrFail($id);
        $role = Role::where('guard_name' , 'web')->get();
        return view('datauser.edit_user' ,compact('user','role'));
    }


    public function update_user(Request $request, $id) {
        $user = User::find($id);

        if ($request->filled('password')) {
            $password = Hash::make($request->password);
        } else {
            $password = $user->password;
        }

        $data['role']  = $request->role;

        
    
        $user->update([
            'name'     => $request->name,
            'username' => $request->username,
            'password' => $password,
        ]);
    
        $user->syncRoles([$data]);

        return redirect()->back();
    }

    public function delete_user($id){

        User::where('id',$id)->delete();
        
        return redirect()->back();
    }


    
    
}
