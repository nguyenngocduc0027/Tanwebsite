<?php

namespace App\Http\Controllers;

use App\Models\NotificationSale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class NotificationSaleController extends Controller
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'start' => 'required|date',
            'end' => 'required|date|after_or_equal:start',
            'url' => 'nullable|url',
            'content' => 'required|string',
        ], [
            'name.required' => 'Cần nhập tên thông báo.',
            'start.required' => 'Cần nhập ngày bắt đầu.',
            'end.required' => 'Cần nhập ngày kết thúc.',
            'end.after_or_equal' => 'Ngày kết thúc phải sau hoặc bằng ngày bắt đầu.',
            'url.url' => 'Định dạng URL không hợp lệ.',
            'content.required' => 'Nội dung là bắt buộc.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        $notificationSale = NotificationSale::create([
            'name' => $request->input('name'),
            'start' => $request->input('start'),
            'end' => $request->input('end'),
            'url' => $request->input('url'),
            'content' => $request->input('content'),
        ]);

        return response()->json([
            'message' => 'Thông báo khuyến mãi đã được tạo thành công.',
            'data' => $notificationSale
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $notificationSale = NotificationSale::all();
        return response()->json($notificationSale);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NotificationSale $notificationSale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'start' => 'required|date',
            'end' => 'required|date|after_or_equal:start',
            'url' => 'nullable|url',
            'content' => 'required|string',
        ], [
            'name.required' => 'Cần nhập tên thông báo.',
            'start.required' => 'Cần nhập ngày bắt đầu.',
            'end.required' => 'Cần nhập ngày kết thúc.',
            'end.after_or_equal' => 'Ngày kết thúc phải sau hoặc bằng ngày bắt đầu.',
            'url.url' => 'Định dạng URL không hợp lệ.',
            'content.required' => 'Nội dung là bắt buộc.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        $notification = NotificationSale::findOrFail($id);
        $notification->update($request->only('name', 'start', 'end', 'url', 'content'));

        return response()->json(['message' => 'Thông báo đã được cập nhật.'],200);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $notification = NotificationSale::findOrFail($id);
        $notification->delete();

        return response()->json(['message' => 'Xoá thông báo thành công.'],200);
    }
}
