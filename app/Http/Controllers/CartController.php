<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
   // Hiển thị giỏ hàng
   public function index()
   {
       // Lấy giỏ từ session, nếu chưa có thì tạo mảng rỗng
       $cart = Session::get('cart', []);

       // Tính tổng tiền
       $total = array_reduce($cart, function($sum, $item) {
           return $sum + $item['price'] * $item['quantity'];
       }, 0);

       return view('home.cart.index', compact('cart', 'total'));
   }

   // Thêm sản phẩm vào giỏ
   public function add(Request $request)
   {
       $productId = $request->input('product_id');
       $qty       = $request->input('quantity', 1);

       $product = Product::findOrFail($productId);

       // Lấy giỏ hiện tại
       $cart = Session::get('cart', []);

       // Nếu sản phẩm đã có trong giỏ, chỉ update số lượng
       if (isset($cart[$productId])) {
           $cart[$productId]['quantity'] += $qty;
       } else {
           // Thêm mới
           $cart[$productId] = [
               'id'       => $product->id,
               'name'     => $product->name,
               'price'    => $product->sale_price,
               'quantity' => $qty,
               'image'    => $product->images->first()->image ?? '/images/products/dauxa.jpg',
           ];
       }

       // Lưu lại session
       Session::put('cart', $cart);

       return redirect()->route('cart.index')
                        ->with('success', 'Đã thêm sản phẩm vào giỏ hàng');
   }
}
