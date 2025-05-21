<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\HomePage;
use App\Models\Level;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\Type;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $sliders = Slider::where('status', 1)->get();
        $home_pages = HomePage::find(1);
        $categories = Category::with('products')->get();
        $testimonials = Testimonial::all();
        $latestBlog = Blog::latest()->first(); // Tin mới nhất
        $otherBlogs = Blog::latest()->skip(1)->take(6)->get(); // Bỏ qua tin đầu, lấy 6 tin tiếp theo
        $partners = Partner::all();
        return view('home.pages.body', compact('categories', 'sliders', 'home_pages', 'testimonials', 'latestBlog', 'otherBlogs', 'partners'));
    }

    public function about()
    {
        $home_pages = HomePage::find(1);
        $categories = Category::with('products')->get();
        $testimonials = Testimonial::all();
        $partners = Partner::all();
        return view('home.pages.about', compact('home_pages', 'categories', 'testimonials', 'partners'));
    }

    public function product()
    {
          $products = Product::orderBy('created_at', 'desc')->paginate(8); // 10 tin mỗi trang, mới nhất lên đầu

        return view('home.pages.product', compact('products'));
    }

    public function product_category($id, Request $request)
    {
         $home_pages = HomePage::find(1);
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

        return view('home.pages.product_category', compact('products', 'category', 'categoryId', 'titleCategory','home_pages'));
    }

    public function product_sub_category($id)
    {
        $titleCategory = 'sub_type';
        $category = Type::all();
        $categoryId = Type::find($id);
        $products = Product::where('type_id', $id)->paginate(12);
        return view('home.pages.product_category',  compact('products', 'category', 'categoryId', 'titleCategory'));
    }

    public function product_subsub_category($id)
    {
        $titleCategory = 'sub_level';
        $category = Level::all();
        $categoryId = Level::find($id);
        $products = Product::where('level_id', $id)->paginate(12);
        return view('home.pages.product_category',  compact('products', 'category', 'categoryId', 'titleCategory'));
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
        return view('home.pages.product_detail', compact('product', 'relatedProducts'));
    }

    public function blog()
    {
        $home_pages = HomePage::find(1);
       $news = Blog::orderBy('created_at', 'desc')->paginate(8); // 10 tin mỗi trang, mới nhất lên đầu

        return view('home.pages.blog', compact('home_pages','news'));
    }

    public function blog_detail($id)
    {
         $news = Blog::find($id);
        // Lấy 4 sản phẩm cùng danh mục, loại trừ sản phẩm hiện tại
        $relatedNews = Blog::where('id', '!=', $news->id)
            ->latest() // hoặc ->inRandomOrder() nếu muốn ngẫu nhiên
            ->take(6)
            ->get();
        return view('home.pages.blog_detail', compact('news', 'relatedNews'));
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
