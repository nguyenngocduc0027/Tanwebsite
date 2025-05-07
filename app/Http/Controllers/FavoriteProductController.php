<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteProductController extends Controller
{
    public function toggleFavorite($productId)
    {
        $user = auth()->user();
        if ($user->favoriteProducts()->where('product_id', $productId)->exists()) {
            $user->favoriteProducts()->detach($productId);
            return response()->json([
                'message' => 'Đã xóa khỏi yêu thích',
                'wishlistCount' => $user->favoriteProducts()->count()
            ]);
        } else {
            $user->favoriteProducts()->attach($productId);
            return response()->json([
                'message' => 'Đã thêm vào yêu thích',
                'wishlistCount' => $user->favoriteProducts()->count()
            ]);
        }
    }
    public function index(){
        $user = Auth::user();
    $wishlists = $user->favoriteProducts()->get();
    return view('home.pages.favorite_product', compact('wishlists'));

    }
    
}
