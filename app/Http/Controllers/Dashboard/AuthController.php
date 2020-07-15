<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('dashboard.auth.login');
    } // end of login method


    public function attempt(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required|string|min:6|max:16'
        ]);

        $checkAuth = admin_guard()->attempt($data);

        if (!$checkAuth) {
            return redirect(route('dashboard.login'));
        }

        session()->flash('status', 'You are logged in successfully');
        return redirect(route('dashboard.index'));
    } // end of attempt method
}
