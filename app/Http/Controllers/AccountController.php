<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
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
            'phone' => 'required|regex:/^0[0-9]{9}$/|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
        ], [
            'name.required' => 'Họ tên là bắt buộc.',
            'phone.required' => 'Số diện thoại là bắt buộc.',
            'phone.regex' => 'Số diện thoại phải bằng 10 số.',
            'phone.unique' => 'Số diện thoại đã tồn tại.',
            'email.required' => 'Email là bắt buộc.',
            'email.unique' => 'Email đã tồn tại.',
            'email.email' => 'Email không hợp lệ.',
            'password.required' => 'Mật khẩu là bắt buộc.',
            'password.min' => 'Mật khẻ phải nhất lẻ 8 kí tự.',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $account = User::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
            'password' => bcrypt($request->input('password')),
        ]);

        return response()->json(['message' => 'Tạo tài khoản thành công.'], 200);

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $account = User::all();
        return response()->json($account);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
            'phone' => "required|regex:/^0[0-9]{9}$/|unique:users,phone,{$id}",
        ], [
            'name.required' => 'Họ tên là bắt buộc.',
            'phone.required' => 'Số diện thoại là bắt buộc.',
            'phone.regex' => 'Số diện thoại phải bằng 10 số.',
            'phone.unique' => 'Số diện thoại đã tồn tại.',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $account = User::findOrFail($id);
        $account->update($request->only('name', 'phone', 'role'));

        return response()->json(['message' => 'Đã được cập nhật.'],200);
    }

    public function update_password(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|string|min:8',
        ], [
            'password.required' => 'Mật khẩu là bắt buộc.',
            'password.min' => 'Mật khẩu phải có ít nhất 8 kí tự.',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $account = User::findOrFail($id);
        $account->password = Hash::make($request->password);
        $account->save();

        return response()->json(['message' => 'Mật khẩu đã được cập nhật.'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $account = User::findOrFail($id);
        $account->delete();

        return response()->json(['message' => 'Xoá thành công.'],200);
    }
}
