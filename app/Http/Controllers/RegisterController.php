<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
        // dd($request->get('name'));
        $request->request->add(['username' => Str::slug($request->username)]);

        $request->validate([
            'name' => 'required',
            'username' => 'required|min:3|max:20|unique:users',
            'empresa' => 'required|min:3|max:30|unique:users',
            'cod_empresa' => 'required|unique:users',
            'email' => 'required|email|max:60|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'empresa' => $request->empresa,
            'cod_empresa' => $request->cod_empresa,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // auth()->attempt([
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ]);

        auth()->attempt($request->only('email','password'));

        return redirect('/');
    }
}
