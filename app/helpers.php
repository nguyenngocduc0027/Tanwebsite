
<?php

use App\Models\Category;
use App\Models\Policie;
use App\Models\PopupAds;
use App\Models\Setting;
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
function popupads(){
    $ads = PopupAds::find(1);
    return $ads;
}
function webConfig(){
    $webConfig = Setting::find(1);
    return $webConfig;
}
function policies(){
  $policies = Policie::where('blog', 'chinh_sach')->get();

    return $policies;
}
function policieshuongdan(){
  $policiehuongdan = Policie::where('blog', 'huong_dan')->get();

    return $policiehuongdan;
}