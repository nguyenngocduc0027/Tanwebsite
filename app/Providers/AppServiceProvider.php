<?php

namespace App\Providers;
use App\Models\FavoriteProduct;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Favorite;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $wishlistCount = auth()->check()
                ? FavoriteProduct::where('user_id', auth()->id())->count()
                : 0;
            $view->with('wishlistCount', $wishlistCount);
        });
    }
}
