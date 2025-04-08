<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home.pages.body');
    }

    public function about()
    {
        return view('home.pages.about');
    }

    public function product()
    {
        return view('home.pages.product');
    }
}
