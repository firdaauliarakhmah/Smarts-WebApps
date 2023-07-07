<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginproses(Request $request){
        $validasi = $request->validate([
            'username'=> 'required',
            'password'=> 'required'

        ]);
        if(Auth::attempt($validasi)){
            $request->session()->regenerate();
            return redirect()->intended('/siswa');

        }
        return \redirect('/login')->with('gagal','Password Yang Dimasukkan Salah');
    }

    public function logout() {
        Auth::logout();
        return \redirect('login');

    }
    
    public function registeruser(Request $request){
        User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return redirect('/login');
    }
}
