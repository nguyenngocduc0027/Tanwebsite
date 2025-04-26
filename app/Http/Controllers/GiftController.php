<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use App\Models\Product;
use Illuminate\Http\Request;

class GiftController extends Controller
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
        return view('admin.gifts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'content' => 'nullable|string',
        ], [
            'name.required' => 'Cần nhập tên.',
            'content.string' => 'Nội dung mô tả phải là chuỗi.',
        ]);

        $gift = new Gift();
        $gift->name = $request->name;
        $gift->content = $request->content;
        $gift->save();
        return response()->json([
            'status' => 'success',
            'message' => 'Thêm quà tặng thành công.',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Gift $gift)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $gift = Gift::find($id);
        return view('admin.gifts.edit', compact('gift'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'content' => 'nullable|string',
        ], [
            'name.required' => 'Cần nhập tên.',
            'content.string' => 'Nội dung mô tả phải là chuỗi.',
        ]);

        $gift = Gift::find($id);
        $gift->name = $request->name;
        $gift->content = $request->content;
        $gift->save();
        return response()->json([
            'status' => 'success',
            'message' => 'Cập nhật quà tặng thành công.',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $gift = Gift::find($id);
        if ($gift) {
            $gift->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Xóa quà tặng thành công.',
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Quà tặng không tồn tại.',
            ]);
        }
    }
}
