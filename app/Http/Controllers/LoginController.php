<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('mascitra.login');
    }

    public function processlogin(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($validatedData)) {
            $request->session()->regenerate();
            if(auth()->user()->level == 'Admin'){
                return redirect()->intended('/dashboard')->with('success', 'Berhasil Login, Halo Admin!');
            } elseif(auth()->user()->level == 'User'){
                return redirect()->intended('/')->with('success', 'Berhasil Login!');
            }
        }
        return back()->with('error', 'Email / Password Salah!');

        
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
