<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('home.pages.body', compact('categories'));
    }

    public function about()
    {
        return view('home.pages.about');
    }

    public function product()
    {
        return view('home.pages.product');
    }

    public function product_category($id)
    {
        $products = Product::where('category_id', $id)->paginate(12);
        return view('home.pages.product_category', compact('products'));
    }
    public function product_sub_category($id)
    {
        $products = Product::where('type_id', $id)->paginate(12);
        return view('home.pages.product_category',  compact('products'));
    }

    public function product_subsub_category($id)
    {
        $products = Product::where('level_id', $id)->paginate(12);
        return view('home.pages.product_category',  compact('products'));
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
