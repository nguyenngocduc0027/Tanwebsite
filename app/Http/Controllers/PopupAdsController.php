<?php

namespace App\Http\Controllers;

use App\Models\PopupAds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PopupAdsController extends Controller
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
    public function show(PopupAds $popupAds)
    {
        $popup_ads = PopupAds::first();
        // Ví dụ dữ liệu bạn lấy từ DB
        $data = [
            'name' => $popup_ads->name,
            'start' => $popup_ads->start,
            'end' => $popup_ads->end,
            'url' => $popup_ads->url,
            'image' => $popup_ads->image,
        ];
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PopupAds $popupAds)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'start' => 'required|date',
            'end' => 'required|date|after_or_equal:start',
            'image' => 'max:2048',
        ], [
            'name.required' => 'Cần nhập tên popup.',
            'start.required' => 'Cần nhập ngày bắt đầu.',
            'end.required' => 'Cần nhập ngày kết thúc.',
            'end.after_or_equal' => 'Ngày kết thúc phải sau hoặc bằng ngày bắt đầu.',
            'image.max' => 'Dung lượng ảnh tối đa 2MB',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        $popup_ads = PopupAds::first() ?? new PopupAds();

        $popup_ads->name = $request->name;
        $popup_ads->start = $request->start;
        $popup_ads->end = $request->end;
        $popup_ads->url = $request->url;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'popup.' . $image->getClientOriginalExtension();
            $image->move(public_path('/images/'), $imageName);
            $popup_ads->image = $imageName;
        }
        $popup_ads->save();

        return response()->json(['success' => true, 'message' => 'Cập nhật thành công!'],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PopupAds $popupAds)
    {
        //
    }
}
