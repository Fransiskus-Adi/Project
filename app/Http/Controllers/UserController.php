<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function store(Request $request)
    {
        $validation = $request->validate([
            'full_name' => 'required | max:255 | min:5',
            'email' => 'required',
            'password' => 'required | min: 5 | confirmed',
        ]);

        $validation['password'] = Hash::make($validation['password']);
        User::create($validation);
        $request->session()->flash('Register Success!');
        return redirect()->route('home');
    }
}
