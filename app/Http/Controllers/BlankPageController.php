<?php

namespace App\Http\Controllers;

use App\Models\BlankPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlankPageController extends Controller
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
        ], [
            'name.required' => 'Cần nhập tên.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        };

        $blankPage = new BlankPage();
        $blankPage->name = $request->name;
        $blankPage->type = $request->type;
        $blankPage->status = $request->status;
        $blankPage->content = $request->content;
        $blankPage->save();
        return response()->json([
            'success' => true,
            'message' => 'Đã được tạo.',
            'data' => $blankPage
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(BlankPage $blankPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlankPage $blankPage)
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
        ], [
            'name.required' => 'Cần nhập tên.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }
        $blankPage = BlankPage::findOrFail($id);
        $blankPage->update($request->only('name', 'type', 'status', 'content'));

        return response()->json(['message' => 'Đã được cập nhật.'],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blankPage = BlankPage::findOrFail($id);
        if ($blankPage) {
            $blankPage->delete();
        }

        return response()->json(['message' => 'Xóa thành công'],200);
    }
}
