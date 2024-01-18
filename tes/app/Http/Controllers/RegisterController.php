<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function register_post(Request $request){
        $validateddata = $request->validate([
            'name' => 'required',
            'email' => 'required||unique:users|email',
            'password' => 'required|unique:users|confirmed|min:8',


        ]);
        $users = DB::table('users')->get();
        $name = $request->input('name');
        $email = $request->input('email');
        $password = bcrypt($request->input('password'));



        if (count($users) < 1) {
            $role = '1';
        } else {
            $role = '0';
        }

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'role' => $role,


        ]);

        if($user){
            return redirect()->route('login')->with(['success'=>'Berhasil !']);
        }
    }


}
