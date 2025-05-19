<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Level;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Type;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
       $sliders = Slider::where('status', 1)->get();

         $categories = Category::with('products')->get();
        return view('home.pages.body', compact('categories','sliders'));
    }

    public function about()
    {
        return view('home.pages.about');
    }

    public function product()
    {
        return view('home.pages.product');
    }

    public function product_category($id, Request $request)
    {
        $titleCategory = 'sub_category';
        $category = Category::all();
        $categoryId = Category::find($id);
    
        $query = Product::where(function ($q) use ($id) {
            $q->where('category_id', $id)
              ->orWhere('category_id', $id); // nếu có
        });
        
   
        // Lọc theo sắp xếp
        switch ($request->input('sort')) {
            case 'alpha-asc':
                $query->orderBy('name', 'asc');
                break;
            case 'alpha-desc':
                $query->orderBy('name', 'desc');
                break;
            case 'price-asc':
                $query->orderBy('sale_price', 'asc');
                break;
            case 'price-desc':
                $query->orderBy('sale_price', 'desc');
                break;
            case 'created-desc':
                $query->orderBy('created_at', 'desc');
                break;
            default:
                $query->latest(); // mặc định
        }
        
    
        $products = $query->paginate(12)->withQueryString(); // Giữ lại query khi phân trang
    
        return view('home.pages.product_category', compact('products','category', 'categoryId','titleCategory'));
    }
    
    public function product_sub_category($id)
    {
        $titleCategory = 'sub_type';
        $category = Type::all();
        $categoryId = Type::find($id);
        $products = Product::where('type_id', $id)->paginate(12);
        return view('home.pages.product_category',  compact('products','category', 'categoryId','titleCategory'));
    }

    public function product_subsub_category($id)
    {
        $titleCategory = 'sub_level';
        $category = Level::all();
        $categoryId = Level::find($id);
        $products = Product::where('level_id', $id)->paginate(12);
        return view('home.pages.product_category',  compact('products','category', 'categoryId','titleCategory'));
    }

    public function product_detail($id)
    {
        $product = Product::find($id);
          // Lấy 4 sản phẩm cùng danh mục, loại trừ sản phẩm hiện tại
    $relatedProducts = Product::where('category_id', $product->category_id)
    ->where('id', '!=', $product->id)
    ->latest() // hoặc ->inRandomOrder() nếu muốn ngẫu nhiên
    ->take(6)
    ->get();
        return view('home.pages.product_detail', compact('product','relatedProducts'));
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
