<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        $web_config = Setting::first();
        // Ví dụ dữ liệu bạn lấy từ DB
        $data = [
            'name' => $web_config->name,
            'email' => $web_config->email,
            'phone' => $web_config->phone,
            'address' => $web_config->address,
            'facebook' => $web_config->facebook,
            'shoppe' => $web_config->shoppe,
            'lazada' => $web_config->lazada,
            'tiktok' => $web_config->tiktok,
            'maps' => $web_config->maps,
            'subtitle' => $web_config->subtitle,
            'momo' => $web_config->momo,
            'zalopay' => $web_config->zalopay,
            'qrcode' => $web_config->qrcode,
            'visa' => $web_config->visa,
            'bank' => $web_config->bank,
            'logo' => $web_config->logo,
            'favicon' => $web_config->favicon,
            'certi1' => $web_config->certi1,
            'certi2' => $web_config->certi2,
            'certi3' => $web_config->certi3,
            'certi4' => $web_config->certi4,
            'seo_author' => $web_config->seo_author,
            'seo_keywords' => $web_config->seo_keywords,
            'seo_site_name' => $web_config->seo_site_name,
            'seo_title' => $web_config->seo_title,
            'seo_image' => $web_config->seo_image,
            'seo_description' => $web_config->seo_description,
        ];
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $web_config = Setting::first() ?? new Setting();

        $web_config->name = $request->name;
        $web_config->email = $request->email;
        $web_config->phone = $request->phone;
        $web_config->address = $request->address;
        $web_config->subtitle = $request->subtitle;
        $web_config->facebook = $request->facebook;
        $web_config->shoppe = $request->shoppe;
        $web_config->lazada = $request->lazada;
        $web_config->tiktok = $request->tiktok;
        $web_config->maps = $request->maps;

        $web_config->momo = $request->momo;
        $web_config->zalopay = $request->zalopay;
        $web_config->qrcode = $request->qrcode;
        $web_config->visa = $request->visa;
        $web_config->bank = $request->bank;

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = 'logo.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('/images/logo/'), $logoName);
            $web_config->logo = $logoName;
        }

        if ($request->hasFile('favicon')) {
            $favicon = $request->file('favicon');
            $faviconName = 'favicon.' . $favicon->getClientOriginalExtension();
            $favicon->move(public_path('/images/favicon/'), $faviconName);
            $web_config->favicon = $faviconName;
        }

        if ($request->hasFile('certi1')) {
            $certi1 = $request->file('certi1');
            $certi1Name = 'certi1.' . $certi1->getClientOriginalExtension();
            $certi1->move(public_path('/images/certi/'), $certi1Name);
            $web_config->certi1 = '/images/certi/'.$certi1Name;
        }
        if ($request->hasFile('certi2')) {
            $certi2 = $request->file('certi2');
            $certi2Name = 'certi2.' . $certi2->getClientOriginalExtension();
            $certi2->move(public_path('/images/certi/'), $certi2Name);
            $web_config->certi2 = '/images/certi/'.$certi2Name;
        }
        if ($request->hasFile('certi3')) {
            $certi3 = $request->file('certi3');
            $certi3Name = 'certi3.' . $certi3->getClientOriginalExtension();
            $certi3->move(public_path('/images/certi/'), $certi3Name);
            $web_config->certi3 = '/images/certi/'.$certi3Name;
        }
        if ($request->hasFile('certi4')) {
            $certi4 = $request->file('certi4');
            $certi4Name = 'certi4.' . $certi4->getClientOriginalExtension();
            $certi4->move(public_path('/images/certi/'), $certi4Name);
            $web_config->certi4 = '/images/certi/'.$certi4Name;
        }


        $web_config->seo_author = $request->seo_author;
        $web_config->seo_keywords = $request->seo_keywords;
        $web_config->seo_site_name = $request->seo_site_name;
        $web_config->seo_title = $request->seo_title;
        if ($request->hasFile('seo_image')) {
            $seo_image = $request->file('seo_image');
            $seo_imageName = 'seo.' . $seo_image->getClientOriginalExtension();
            $seo_image->move(public_path('/images/seo/'), $seo_imageName);
            $web_config->seo_image = $seo_imageName;
        }
        $web_config->seo_description = $request->seo_description;
        $web_config->save();

        return response()->json(['success' => true, 'message' => 'Cập nhật thành công!']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
