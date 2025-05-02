<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TestimonialController extends Controller
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
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required|string',
        ],
        [
            'name.required' => 'Tên không được để trống.',
            'position.required' => 'Chức vụ không được để trống.',
            'image.required' => 'Hình ảnh không được để trống.',
            'content.required' => 'Nội dung không được để trống.',
            'image.image' => 'Tệp tải lên phải là hình ảnh.',
            'image.mimes' => 'Hình ảnh phải có định dạng jpeg, png, jpg hoặc gif.',
            'image.max' => 'Kích thước hình ảnh không được vượt quá 2MB.',
        ]);

        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->position = $request->position;
        $testimonial->content = $request->content;


        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/testimonials'), $imageName);
            $testimonial->image = '/images/testimonials/' . $imageName;
        }

        $testimonial->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Phản hồi đã được thêm.',
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validateData = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required|string',
        ],
        [
            'name.required' => 'Tên không được để trống.',
            'position.required' => 'Chức vụ không được để trống.',
            'image.image' => 'Tệp tải lên phải là hình ảnh.',
            'image.mimes' => 'Hình ảnh phải có định dạng jpeg, png, jpg hoặc gif.',
            'image.max' => 'Kích thước hình ảnh không được vượt quá 2MB.',
            'content.required' => 'Nội dung không được để trống.',
        ]);
        $validateData->validate();

        $testimonial = Testimonial::find($id);
        $testimonial->name = $request->name;
        $testimonial->position = $request->position;
        $testimonial->content = $request->content;

        if ($request->hasFile('image')) {
            // Xóa hình ảnh cũ nếu có
            if ($testimonial->image) {
                $oldImagePath = public_path($testimonial->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/testimonials'), $imageName);
            $testimonial->image = '/images/testimonials/' . $imageName;
        }

        $testimonial->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Phản hồi đã được cập nhật.',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        // Xóa hình ảnh cũ nếu có
        if ($testimonial->image) {
            $oldImagePath = public_path($testimonial->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }
        $testimonial->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Phản hồi đã được xóa.',
        ], 200);
    }
}
