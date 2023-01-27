<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //Registro
    public function register(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'username' => 'required|min:3|max:20|unique:users',
            'empresa' => 'required|min:3|max:30|unique:users',
            'cod_empresa' => 'required|unique:users',
            'email' => 'required|email|max:60|unique:users',
            'password' => 'required|min:6|',
        ]);

        $user = User::create([
            'name' => $validateData['name'],
            'username' => $validateData['username'],
            'empresa' => $validateData['empresa'],
            'cod_empresa' => $validateData['cod_empresa'],
            'email' => $validateData['email'],
            'password' =>  Hash::make($validateData['password']),
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ], 200);
    }

    // Login
    public function login(Request $request){
        if (!Auth::attempt($request->only('email','password'))) {
            return response()->json(['Mensaje' => 'Inicio Invalido'],404);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ], 200);
    }

    // Ver informacion por token
    public function infouser(Request $request){
        return $request->user();
    }
}
