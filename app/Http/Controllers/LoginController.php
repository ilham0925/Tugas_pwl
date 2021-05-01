<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Str;
class LoginController extends Controller
{
    public function postlogin(request $request){
       // dd($request->all());

       if (Auth::attempt($request->only('email', 'password'))){
           return redirect('/beranda');
       }

       return redirect('login');
    }

    public function logout(request $request){
        Auth::logout();
        return redirect('/');
    }

    public function registrasi(){
        return view('pengguna.registrasi');
    }

    public function simpanregistrasi(request $request){
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'level' => 'user',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return view('pengguna.login');
    }
    
}
