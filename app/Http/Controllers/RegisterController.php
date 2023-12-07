<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        return view('mascitra.register');
    }

    public function processregister(Request $request){
        $validatedData = $request->validate([
            'email'=> ['required', 'email', 'unique:users'],
            'nama' => 'required',
            'password' => 'required|confirmed'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);

        Auth::login($user);

        return redirect('/')->with('success', 'Berhasil Register, Login Berhasil');
    }
}
