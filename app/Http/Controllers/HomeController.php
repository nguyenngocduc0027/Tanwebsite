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

    public function product_category()
    {
        return view('home.pages.product_category');
    }
    public function product_sub_category()
    {
        return view('home.pages.product_sub_category');
    }

    public function product_subsub_category()
    {
        return view('home.pages.product_subsub_category');
    }

    public function product_detail()
    {
        return view('home.pages.product_detail');
    }

    public function blog()
    {
        return view('home.pages.blog');
    }

    public function blog_detail()
    {
        return view('home.pages.blog_detail');
    }

    public function contact()
    {
        return view('home.pages.contact');
    }

    public function blank()
    {
        return view('home.pages.blank');
    }
}
