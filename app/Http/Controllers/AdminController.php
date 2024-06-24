<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index (){
        $user = User::all()->skip(1);
        return view('admin.index', compact('user'));
    }
    public function store (request $request){
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'no_telepon' => $request->no_telepon,
            'isAdmin' => $request->isAdmin,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/admin');
    }
    public function edituser($id){
        $user = User::find($id);
        return view('admin.update_page', compact('user'));
    }
    public function updateuser(Request $request, $id){
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->isAdmin = $request->input('isAdmin');
        $user->username = $request->input('username');
        $user->no_telepon = $request->input('no_telepon');
        $user->password = bcrypt($request->input('password'));
        $user->update();
        return redirect('/admin'); 
    }
    public function destroy ($id){
        $Users = User::findOrFail($id);

        $Users->delete();

        return redirect('/admin');
    }
}
