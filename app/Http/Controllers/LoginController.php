<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function userLogin(Request $request)
    {
        $userData = $request->validate([
            'full_name' => 'required',
            'password' => 'required'
        ]);

        if ($request->remember) {
            Cookie::queue('cookie', $request->full_name, 10);
        }

        if (Auth::attempt($userData)) {
            // Session::put('userSession', $userData);
            $request->session()->regenerate();
            return redirect('/');
        }

        return redirect()->back();
    }

    public function userLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
