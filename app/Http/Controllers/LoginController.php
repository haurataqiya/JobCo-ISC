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

    public function register()
    {
        return view('signup');
    }
    public function autentikasi(Request $request)
    {
        // cek email
        $email = $request->input('email');

        // cek password
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $user = Auth::user();
            if ($user->role == 1) {
                return view('dashboardUser');
            } else if ($user->role == 2) {
                return view('dashboardMentor');
            } else if ($user->role == 3) {
                return view('dashboardAdmin');
            }
        }

        return back()->with('error', 'Maaf! Username / Password salah cok');
    }

    public function logout() {}
}
