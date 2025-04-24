<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function view_login()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'admin' || $user->role === 'manager') {
                return response()->json([
                    'status' => 'success',
                    'redirect' => route('admin.index')
                ]);
            }

            return response()->json([
                'status' => 'success',
                'redirect' => route('user.index')
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Tài khoản hoặc mật khẩu không đúng.'
        ]);
    }

    public function view_register()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        // Handle the registration logic here
        // For example, validate the request and create a new user
        return redirect()->route('home');
    }

    public function view_forgot_password()
    {
        return view('auth.forgot');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
