<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function view_login()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        // Handle the login logic here
        // For example, validate the request and authenticate the user
        return redirect()->route('home');
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

    public function logout(Request $request)
    {
        // Handle the logout logic here
        // For example, log out the user and redirect to the home page
        return redirect()->route('home');
    }
}
