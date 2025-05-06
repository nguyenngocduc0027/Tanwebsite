<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FavoriteProductController extends Controller
{
    public function toggleFavorite($productId)
    {
        $user = auth()->user();
        $product = Product::findOrFail($productId);
    
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
    
}
