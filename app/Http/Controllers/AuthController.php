<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function indexRegister(){
        return view('auth.register');
    }
    public function indexLogin(){
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        $user = $request->only('name', 'password');
        if(Auth::attempt($user)){
            return redirect('/jadwal')->with('success', 'Anda berhasil login!!');
        }


    }

    public function registerAccount(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
    
        ]);
        return redirect('/login')->with('success', 'Registrasi berhasil! , silahkan Login');
    }
}
