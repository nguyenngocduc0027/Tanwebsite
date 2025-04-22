<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show()
    {
        $homePage = HomePage::first();
        $data = [
            'service1' => $homePage->service1,
            'content1' => $homePage->content1,
            'image1' => $homePage->image1,
            'service2' => $homePage->service2,
            'content2' => $homePage->content2,
            'image2' => $homePage->image2,
            'service3' => $homePage->service3,
            'content3' => $homePage->content3,
            'image3' => $homePage->image3,
            'service4' => $homePage->service4,
            'content4' => $homePage->content4,
            'image4' => $homePage->image4,
            'set_product_title' => $homePage->set_product_title,
            'set_product_subtitle' => $homePage->set_product_subtitle,
            'set_product_description' => $homePage->set_product_description,
            'sale_product_title' => $homePage->sale_product_title,
            'sale_product_subtitle' => $homePage->sale_product_subtitle,
            'sale_product_description' => $homePage->sale_product_description,
            'coupon_title' => $homePage->coupon_title,
            'coupon_subtitle' => $homePage->coupon_subtitle,
            'coupon_description' => $homePage->coupon_description,
            'about_title' => $homePage->about_title,
            'about_subtitle' => $homePage->about_subtitle,
            'about_description' => $homePage->about_description,
            'image_about' => $homePage->image_about,
            'why_title' => $homePage->why_title,
            'why_subtitle' => $homePage->why_subtitle,
            'why1' => $homePage->why1,
            'content_why1' => $homePage->content_why1,
            'image_why1' => $homePage->image_why1,
            'why2' => $homePage->why2,
            'content_why2' => $homePage->content_why2,
            'image_why2' => $homePage->image_why2,
            'why3' => $homePage->why3,
            'content_why3' => $homePage->content_why3,
            'image_why3' => $homePage->image_why3,
            'why4' => $homePage->why4,
            'content_why4' => $homePage->content_why4,
            'image_why4' => $homePage->image_why4,
            'why5' => $homePage->why5,
            'content_why5' => $homePage->content_why5,
            'image_why5' => $homePage->image_why5,
            'why6' => $homePage->why6,
            'content_why6' => $homePage->content_why6,
            'image_why6' => $homePage->image_why6,
            'img_why' => $homePage->img_why,
            'product_title' => $homePage->product_title,
            'product_subtitle' => $homePage->product_subtitle,
            'product_description' => $homePage->product_description,
            'feedback_title' => $homePage->feedback_title,
            'feedback_subtitle' => $homePage->feedback_subtitle,
            'feedback_description' => $homePage->feedback_description,
            'blog_title' => $homePage->blog_title,
            'blog_subtitle' => $homePage->blog_subtitle,
            'blog_description' => $homePage->blog_description,
            'partner_title' => $homePage->partner_title,
            'partner_subtitle' => $homePage->partner_subtitle,
            'partner_description' => $homePage->partner_description,
        ];

        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomePage $homePage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $homePage = HomePage::first() ?? new HomePage();

        $homePage->service1 = $request->service1;
        $homePage->content1 = $request->content1;
        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $image1Name = 'ser_1.' . $image1->getClientOriginalExtension();
            $image1->move(public_path('/images/ser/'), $image1Name);
            $homePage->image1 = '/images/ser/'.$image1Name;
        }
        $homePage->service2 = $request->service2;
        $homePage->content2 = $request->content2;
        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $image2Name = 'ser_2.' . $image2->getClientOriginalExtension();
            $image2->move(public_path('/images/ser/'), $image2Name);
            $homePage->image2 = '/images/ser/'.$image2Name;
        }
        $homePage->service3 = $request->service3;
        $homePage->content3 = $request->content3;
        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3');
            $image3Name = 'ser_3.' . $image3->getClientOriginalExtension();
            $image3->move(public_path('/images/ser/'), $image3Name);
            $homePage->image3 = '/images/ser/'.$image3Name;
        }
        $homePage->service4 = $request->service4;
        $homePage->content4 = $request->content4;
        if ($request->hasFile('image4')) {
            $image4 = $request->file('image4');
            $image4Name = 'ser_4.' . $image4->getClientOriginalExtension();
            $image4->move(public_path('/images/ser/'), $image4Name);
            $homePage->image4 = '/images/ser/'.$image4Name;
        }
        $homePage->set_product_title = $request->set_product_title;
        $homePage->set_product_subtitle = $request->set_product_subtitle;
        $homePage->set_product_description = $request->set_product_description;
        $homePage->sale_product_title = $request->sale_product_title;
        $homePage->sale_product_subtitle = $request->sale_product_subtitle;
        $homePage->sale_product_description = $request->sale_product_description;
        $homePage->coupon_title = $request->coupon_title;
        $homePage->coupon_subtitle = $request->coupon_subtitle;
        $homePage->coupon_description = $request->coupon_description;
        $homePage->about_title = $request->about_title;
        $homePage->about_subtitle = $request->about_subtitle;
        $homePage->about_description = $request->about_description;
        if ($request->hasFile('image_about')) {
            $image_about = $request->file('image_about');
            $image_aboutName = 'image_about.' . $image_about->getClientOriginalExtension();
            $image_about->move(public_path('/images/products/'), $image_aboutName);
            $homePage->image_about = '/images/products/'.$image_aboutName;
        }
        $homePage->why_title = $request->why_title;
        $homePage->why_subtitle = $request->why_subtitle;
        $homePage->why1 = $request->why1;
        $homePage->content_why1 = $request->content_why1;
        if ($request->hasFile('image_why1')) {
            $image_why1 = $request->file('image_why1');
            $image_why1Name = 'image_why1.' . $image_why1->getClientOriginalExtension();
            $image_why1->move(public_path('/images/why/'),  $image_why1Name);
            $homePage->image_why1 = '/images/why/'.$image_why1Name;
        }
        $homePage->why2 = $request->why2;
        $homePage->content_why2 = $request->content_why2;
        if ($request->hasFile('image_why2')) {
            $image_why2 = $request->file('image_why2');
            $image_why2Name = 'image_why2.' . $image_why2->getClientOriginalExtension();
            $image_why2->move(public_path('/images/why/'),  $image_why2Name);
            $homePage->image_why2 = '/images/why/'.$image_why2Name;
        }
        $homePage->why3 = $request->why3;
        $homePage->content_why3 = $request->content_why3;
        if ($request->hasFile('image_why3')) {
            $image_why3 = $request->file('image_why3');
            $image_why3Name = 'image_why3.' . $image_why3->getClientOriginalExtension();
            $image_why3->move(public_path('/images/why/'),  $image_why3Name);
            $homePage->image_why3 = '/images/why/'.$image_why3Name;
        }
        $homePage->why4 = $request->why4;
        $homePage->content_why4 = $request->content_why4;
        if ($request->hasFile('image_why4')) {
            $image_why4 = $request->file('image_why4');
            $image_why4Name = 'image_why4.' . $image_why4->getClientOriginalExtension();
            $image_why4->move(public_path('/images/why/'),  $image_why4Name);
            $homePage->image_why4 = '/images/why/'.$image_why4Name;
        }
        $homePage->why5 = $request->why5;
        $homePage->content_why5 = $request->content_why5;
        if ($request->hasFile('image_why5')) {
            $image_why5 = $request->file('image_why5');
            $image_why5Name = 'image_why5.' . $image_why5->getClientOriginalExtension();
            $image_why5->move(public_path('/images/why/'),  $image_why5Name);
            $homePage->image_why5 = '/images/why/'.$image_why5Name;
        }
        $homePage->why6 = $request->why6;
        $homePage->content_why6 = $request->content_why6;
        if ($request->hasFile('image_why6')) {
            $image_why6 = $request->file('image_why6');
            $image_why6Name = 'image_why6.' . $image_why6->getClientOriginalExtension();
            $image_why6->move(public_path('/images/why/'),  $image_why6Name);
            $homePage->image_why6 = '/images/why/'.$image_why6Name;
        }
        if ($request->hasFile('img_why')) {
            $img_why = $request->file('img_why');
            $img_whyName = 'img_why.' . $img_why->getClientOriginalExtension();
            $img_why->move(public_path('/images/why/'),  $img_whyName);
            $homePage->img_why = '/images/why/'.$img_whyName;
        }
        $homePage->product_title = $request->product_title;
        $homePage->product_subtitle = $request->product_subtitle;
        $homePage->product_description = $request->product_description;
        $homePage->feedback_title = $request->feedback_title;
        $homePage->feedback_subtitle = $request->feedback_subtitle;
        $homePage->feedback_description = $request->feedback_description;
        $homePage->blog_title = $request->blog_title;
        $homePage->blog_subtitle = $request->blog_subtitle;
        $homePage->blog_description = $request->blog_description;
        $homePage->partner_title = $request->partner_title;
        $homePage->partner_subtitle = $request->partner_subtitle;
        $homePage->partner_description = $request->partner_description;

        $homePage->save();

        return response()->json(['success' => true, 'message' => 'Cập nhật thành công!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomePage $homePage)
    {
        //
    }
}
