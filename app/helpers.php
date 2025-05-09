
<?php

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



function category()
{
    $categories = Category::orderBy('id', 'desc')->get();
    return $categories;
}
function totalQuantityCart(){
    $cart = session('cart', []);
    $totalQuantity = array_sum(array_column($cart, 'quantity'));
    return $totalQuantity;
}