<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class SessionController extends Controller
{
    public function index()
    {
       return view("login", [
            'title' => 'Login'
       ]);
    }

    public function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Password wajib diisi'
        ]);
        $infoLogin = [
            'email'=> $request->email,
            'password'=> $request->password
        ];

        if (Auth::attempt($infoLogin)) {
            return "succes";
        }else{
            return redirect('sesi')->withErrors('Username atau password yang anda masukkan salah');
        }
    }
}
