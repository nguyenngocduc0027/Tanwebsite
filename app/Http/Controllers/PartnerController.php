<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PartnerController extends Controller
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ],
        [
            'name.required' => 'Tên không được để trống.',
            'image.required' => 'Hình ảnh không được để trống.',
            'image.image' => 'Tệp tải lên phải là hình ảnh.',
            'image.mimes' => 'Hình ảnh phải có định dạng jpeg, png, jpg hoặc gif.',
            'image.max' => 'Kích thước hình ảnh không được vượt quá 2MB.',
        ]);

        $partner = new Partner();
        $partner->name = $request->name;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/partners'), $imageName);
            $partner->image = '/images/partners/' . $imageName;
        }

        $partner->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Đối tác đã được thêm.',
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partner $partner)
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ],
        [
            'name.required' => 'Tên không được để trống.',
            'image.image' => 'Tệp tải lên phải là hình ảnh.',
            'image.mimes' => 'Hình ảnh phải có định dạng jpeg, png, jpg hoặc gif.',
            'image.max' => 'Kích thước hình ảnh không được vượt quá 2MB.',
        ]);
        $validateData->validate();

        $partner = Partner::find($id);
        $partner->name = $request->name;

        if ($request->hasFile('image')) {
            // Xóa hình ảnh cũ nếu có
            if ($partner->image) {
                $oldImagePath = public_path($partner->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/partners'), $imageName);
            $partner->image = '/images/partners/' . $imageName;
        }

        $partner->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Đối tác đã được cập nhật.',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);
        // Xóa hình ảnh cũ nếu có
        if ($partner->image) {
            $oldImagePath = public_path($partner->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }
        $partner->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Đối tác đã được xóa.',
        ], 200);
    }
}
