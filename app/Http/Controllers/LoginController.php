<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function auth_login()
    {
        if (Auth::user()->user_level == 0) {
            return view('layouts.admin.dash');
        } else if (Auth::user()->user_level == 1) {
            return view('layouts.user.dash');
        }
    }

    // public function auth_logout(Request $request)
    // {
    //     Auth::logout();
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();
    //     return redirect('/');
    // }
}
