<?php

namespace App\Http\Controllers;

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
