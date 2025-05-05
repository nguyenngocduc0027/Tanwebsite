
<?php

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



function category()
{
    $categories = Category::orderBy('id', 'desc')->get();
    return $categories;
}