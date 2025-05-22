<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\User;
use App\Models\ListShop;
use App\Models\NotificationSale;
use App\Models\BlankPage;
use App\Models\Blog;
use App\Models\Gift;
use App\Models\Product;
use App\Models\Testimonial;
use App\Models\Partner;
use App\Models\Inventory;
use App\Models\Type;
use App\Models\Level;
use App\Models\Order;
use App\Models\Slider;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.pages.dashboard');
    }

    public function web_config()
    {
        return view('admin.pages.web_config');
    }

    public function home_page()
    {
        return view('admin.pages.home_page');
    }

    public function blank_page()
    {
        $blank_page = BlankPage::all();
        return view('admin.pages.blank_page', compact('blank_page'));
    }
    public function notification_sale()
    {
        $notification_sale = NotificationSale::all();
        return view('admin.pages.notification_sale', compact('notification_sale'));
    }

    public function popup_ads()
    {
        return view('admin.pages.popup_ads');
    }

    public function list_shop()
    {
        $list_shop = ListShop::all();
        return view('admin.pages.list_shop', compact('list_shop'));
    }

    public function account()
    {
        $account = User::all();
        return view('admin.pages.account', compact('account'));
    }

    public function category()
    {
        $categories = Category::with('types.levels')->get();
        return view('admin.pages.category', compact('categories'));
    }

    public function blog()
    {
        $blogs = Blog::latest()->get();
        return view('admin.pages.blog', compact('blogs'));
    }

    public function product()
    {
        $products = Product::orderBy('id', 'desc')->get(); // Sắp xếp theo id giảm dần

        return view('admin.pages.product', compact('products'));
    }

    public function gift()
    {
        $gifts = Gift::all();
        return view('admin.pages.gift', compact('gifts'));
    }

    public function slider()
    {
        $sliders = Slider::all();
        return view('admin.pages.slider', compact('sliders'));
    }

    public function testimonial()
    {
        $testimonials = Testimonial::all();
        return view('admin.pages.testimonial', compact('testimonials'));
    }

    public function partner()
    {
        $partners = Partner::all();
        return view('admin.pages.partner', compact('partners'));
    }

    public function inventory()
    {
        $products = Product::all();
        $inventories = Inventory::all();

        return view('admin.pages.inventory', compact('products', 'inventories'));
    }
    public function cart()
    {
        $orders = Order::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.cart.index', compact('orders'));
    }
    public function cartdetail($id)
    {
        $order = Order::find($id);
        return view('admin.cart.detail', compact('order'));
    }
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->back()->with('success', 'Xoá đơn hàng thành công!');
    }
    public function updateStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->status = $request->input('status');
        $order->save();

        return redirect()->back()->with('success', 'Cập nhật trạng thái thành công!');
    }
}
