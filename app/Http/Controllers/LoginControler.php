<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginControler extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            // if ($user->level = '1') {
            //     return redirect()->intended('admin');
            // } elseif ($user->level = '2') {
            //     return redirect()->intended('ware');
            // } elseif ($user->level = '3') {
            //     return redirect()->intended('user');
            // }
            return redirect()->intended('home');
        }
        return view('auth.login');
    }

    public function proses(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        $kredensial = $request->only('email', 'password');
        if (Auth::attempt($kredensial)) {
            $request->session()->regenerate();
            $user = Auth::user();
            // if (Auth::user()) {
            //     // if ($user->level = '1') {
            //     //     return redirect()->intended('admin');
            //     // } elseif ($user->level = '2') {
            //     //     return redirect()->intended('ware');
            //     // } elseif ($user->level = '3') {
            //     //     return redirect()->intended('user');
            //     // }
            // }
            if ($user){
                return redirect()->intended('home');
            }

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'maaf email atau password salah'
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
