<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class AuthController extends Controller
{
    public function login() {
        return view('auth.login', [
            'title' => 'Login'
        ]);
    }

    public function loginPost(Request $request) {
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($validatedData)) {
            $request->session()->regenerate();
            return redirect('/dashboard');
        }
    }
    
    public function logout() {
        Auth::logout();
        return redirect('/auth/login');
    }
    
}
