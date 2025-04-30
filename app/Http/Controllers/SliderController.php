<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
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
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'link' => 'nullable|url',
            'status' => 'nullable|in:0,1',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'title.required' => 'Tiêu đề không được để trống',
            'image.required' => 'Hình ảnh không được để trống',
            'image.image' => 'Tập tin phải là hình ảnh',
            'image.mimes' => 'Hình ảnh phải có định dạng jpeg, png, jpg, gif',
            'image.max' => 'Kích thước hình ảnh không được vượt quá 2MB',
            'link.url' => 'Liên kết không hợp lệ',
            'status.in' => 'Trạng thái không hợp lệ',
        ]);

        $slider = new Slider();
        $slider->title = $request->title;
        $slider->subtitle = $request->subtitle;
        $slider->link = $request->link;
        $slider->status = $request->status;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/images/sliders'), $imageName);
            $path = '/images/sliders/' . $imageName;
            $slider->image = $path;
        }

        $slider->save();

        return response()->json(['message' => 'Thêm slider thành công!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'link' => 'nullable|url',
            'status' => 'nullable|in:0,1',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'title.required' => 'Tiêu đề không được để trống',
            'image.image' => 'Tập tin phải là hình ảnh',
            'image.mimes' => 'Hình ảnh phải có định dạng jpeg, png, jpg, gif',
            'image.max' => 'Kích thước hình ảnh không được vượt quá 2MB',
            'link.url' => 'Liên kết không hợp lệ',
            'status.in' => 'Trạng thái không hợp lệ',
        ]);
        $validator->validate();

        $slider = Slider::findOrFail($id);
        $slider->title = $request->title;
        $slider->subtitle = $request->subtitle;
        $slider->link = $request->link;
        $slider->status = $request->status;

        if ($request->hasFile('image')) {
            // Xóa hình ảnh cũ nếu có
            if ($slider->image) {
                $imagePath = public_path($slider->image);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            // Lưu hình ảnh mới
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/images/sliders'), $imageName);
            $path = '/images/sliders/' . $imageName;
            $slider->image = $path;
        }

        $slider->save();

        return response()->json(['message' => 'Cập nhật slider thành công!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        if ($slider->image) {
            $imagePath = public_path($slider->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $slider->delete();

        return response()->json(['message' => 'Xóa slider thành công!']);
    }

}
