<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }
    public function aksi_register(Request $request){
        $request->validate(['nama'=>'required','email'=>'required|email|unique:pengguna,email','password'=>'required'],['email.email'=>'Email Tidak Valid!','nama.required'=>'Nama Harus Di Isi!','password.required'=>'Password Harus Di Isi!','email.required'=>'Email Harus Di Isi!']);
        Pengguna::insert(['nama'=>$request->nama,'email'=>$request->email,'password'=>Hash::make($request->password)]);
        return redirect()->back()->with('register','Berhasil Register');
    }
    public function login(){
        return view('auth.login');
    }
    public function aksi_login(Request $request){
        $request->validate(['email'=>'required|email','password'=>'required'],['email.email'=>'Email Tidak Valid!','password.required'=>'Password Harus Di Isi!','email.required'=>'Email Harus Di Isi!']);
        $credentials= $request->only(['email','password']);
        if (Auth::attempt($credentials)){
        $request->session()->regenerate();
        return redirect()->route('home');
        }
        return redirect()->back();
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
