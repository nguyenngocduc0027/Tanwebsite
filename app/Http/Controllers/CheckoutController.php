<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function checkoutForm()
{
    return view('home.cart.checkout');
}

public function placeOrder(Request $request)
{
    $request->validate([
        'name'    => 'required|string|max:255',
        'email'   => 'required|email',
        'phone'   => 'required|string|max:20',
        'address' => 'required|string|max:255',
    ]);

    $cart = Session::get('cart', []);

    if (empty($cart)) {
        return redirect()->route('cart.index')->with('error', 'Giỏ hàng trống!');
    }

    // Giả sử bạn có model Order và OrderItem
    $order = \App\Models\Order::create([
        'customer_name'  => $request->name,
        'customer_email'          => $request->email,
        'customer_phone'          => $request->phone,
        'customer_address'        => $request->address,
        'customer_note'           => $request->note,
        'total_amount'          => collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']),
        'status'         => 'pending',
    ]);

    foreach ($cart as $item) {
        $order->items()->create([
            'product_id' => $item['id'],
            'product_name'       => $item['name'],
            'product_image'      => $item['image'],
            'price'      => $item['price'],
            'quantity'   => $item['quantity'],
            'total'     => $item['price'] * $item['quantity'],
        ]);
    }

    Session::forget('cart');

    return redirect()->route('cart.index')->with('success', 'Đặt hàng thành công!');
}

}
