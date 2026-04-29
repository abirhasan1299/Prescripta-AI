<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function RegisterUser(Request $request)
    {
       $request->validate([
           'name' => 'required|string|max:255|unique:users',
           'email' => 'required|email|unique:users',
           'password' => 'required|min:6',
           'phone' => 'required|max:11|unique:users'
       ]);
       // Need to code here more  . . .
    }
}
