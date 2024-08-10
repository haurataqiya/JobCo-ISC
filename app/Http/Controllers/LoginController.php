<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('signin');
    }
    public function autentikasi(Request $request)
    {
        // cek email
        $email = $request->input('email');

        // cek password
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return true;
        }

        return back()->withErrors([
            'username' => 'tidak cocok'
        ]);
    }
}
