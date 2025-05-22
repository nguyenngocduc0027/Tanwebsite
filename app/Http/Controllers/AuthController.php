<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function view_login()
    {
        if (auth::check()) {
            $user = Auth::user();

            if ($user->role === 'admin' || $user->role === 'manager') {
                return redirect()->route('admin.index');
            }
            return redirect()->route('home');
       
        }
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'admin' || $user->role === 'manager') {
                return redirect()->route('admin.index')->with('success', 'Đăng nhập thành công!');
            }

            return redirect()->route('home')->with('success', 'Đăng nhập thành công!');
        }
        return redirect()->back()->with('error', 'Tài khoản hoặc mật khẩu không đúng.');

       
    }

    public function view_register()
    {
        return view('auth.register');
    }
    public function post_register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'name' => 'required|string|max:255',
            'phone' => 'required|regex:/^0[0-9]{9,10}$/',
            'password' => 'required|min:6',
        ]);
    
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => 'user', // Default role
            'password' => Hash::make($request->password),
        ]);
    
        auth()->login($user);
    
        return redirect()->route('home')->with('success', 'Đăng ký thành công!');
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
