<?php

namespace App\Http\Controllers;

use App\Models\ListShop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ListShopController extends Controller
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
            'phone' => 'required|regex:/^0[0-9]{9}$/',
            'email' => 'required|email',
            'maps' => 'nullable|url',
        ], [
            'name.required' => 'Cần nhập tên.',
            'phone.required' => 'Cần nhập số diện thoại.',
            'phone.regex' => 'Số diện thoại phải bằng 10 số.',
            'email.required' => 'Cần nhập email .',
            'email.email' => 'Email không hợp lệ.',
            'maps.url' => 'Định dạng URL không hợp lệ.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        $listShop = ListShop::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'maps' => $request->input('maps'),
        ]);

        return response()->json([
            'message' => 'Đã được tạo thành công.',
            'data' => $listShop], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $listShop = ListShop::all();
        return response()->json($listShop);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ListShop $listShop)
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
            'phone' => 'required|regex:/^0[0-9]{9}$/',
            'email' => 'required|email',
            'maps' => 'nullable|url',
        ], [
            'name.required' => 'Cần nhập tên.',
            'phone.required' => 'Cần nhập số diện thoại.',
            'phone.regex' => 'Số diện thoại phải bằng 10 số.',
            'email.required' => 'Cần nhập email .',
            'email.email' => 'Email không hợp lệ.',
            'maps.url' => 'Định dạng URL không hợp lệ.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }
        $listShop = ListShop::findOrFail($id);
        $listShop->update($request->only('name', 'phone', 'email', 'maps'));

        return response()->json(['message' => 'Đã được cập nhật.'],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $listShop = ListShop::findOrFail($id);
        $listShop->delete();

        return response()->json(['message' => 'Xoá thành công.'],200);
    }
}
