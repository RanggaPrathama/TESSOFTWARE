<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function login_post(Request $request){
        $validateddata = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($validateddata)) {
            $request->session()->regenerate();

                if (auth()->user()->role == 0) {
                    return redirect()->route('buku.index')->with('success', 'Berhasil Login !');
                } else {
                    return redirect()->route('admin.home')->with('success', 'Berhasil Login !');
                }

        } else {
            return redirect()->back()->with('errors', 'Email atau password salah');
        };

}
}
