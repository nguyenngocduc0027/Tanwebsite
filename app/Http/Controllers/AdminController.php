<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\User;
use App\Models\ListShop;
use App\Models\NotificationSale;

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
        return view('admin.pages.category');
    }
}
