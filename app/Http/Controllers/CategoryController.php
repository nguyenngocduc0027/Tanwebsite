<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Type;
use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    // Category CRUD
    public function storeCategory(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ], [
            'name.required' => 'Cần nhập tên danh mục.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return response()->json([
            'message' => 'Đã được tạo thành công.',
            'data' => $category
        ], 200);
    }

    public function updateCategory(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ], [
            'name.required' => 'Cần nhập tên danh mục.',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }
        $category = Category::findOrFail($id);
        $category->update(['name' => $request->name]);
        return response()->json(['success' => true, 'message' => 'Cập nhật danh mục thành công!']);
    }

    public function destroyCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        $types = Type::where('category_id', $id)->get();
        foreach ($types as $type) {
            $types->delete();
            $levels = Level::where('type_id', $type->id)->get();
            foreach ($levels as $level) {
                $level->delete();
            }
        }
        return response()->json(['success' => true, 'message' => 'Xóa danh mục thành công!']);
    }

    // Type CRUD
    public function storeType(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ], [
            'name.required' => 'Cần nhập tên loại.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        $types = new Type();
        $types->name = $request->name;
        $types->category_id = $request->category_id;
        $types->save();

        return response()->json([
            'message' => 'Đã được tạo thành công.',
            'data' => $types,
        ], 200);
    }

    public function updateType(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ], [
            'name.required' => 'Cần nhập tên kiểu.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }
        $type = Type::findOrFail($id);
        $type->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
        ]);
        return response()->json(['success' => true, 'message' => 'Cập nhật loại thành công!']);
    }

    public function destroyType($id)
    {
        $type = Type::findOrFail($id);
        $type->delete();
        $levels = Level::where('type_id', $id)->get();
        foreach ($levels as $level) {
            $level->delete();
        }
        return response()->json(['success' => true, 'message' => 'Xóa loại thành công!']);
    }

    // Level CRUD
    public function storeLevel(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ], [
            'name.required' => 'Cần nhập tên kiểu.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        $levels = new Level();
        $levels->name = $request->name;
        $levels->type_id = $request->type_id;
        $levels->save();

        return response()->json([
            'message' => 'Đã được tạo thành công.',
            'data' => $levels,
        ], 200);
    }

    public function updateLevel(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ], [
            'name.required' => 'Cần nhập tên kiểu.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        $level = Level::findOrFail($id);
        $level->update([
            'name' => $request->name,
            'type_id' => $request->type_id,
        ]);
        return response()->json(['success' => true, 'message' => 'Cập nhật kiểu thành công!']);
    }

    public function destroyLevel($id)
    {
        $level = Level::findOrFail($id);
        $level->delete();
        return response()->json(['success' => true, 'message' => 'Xóa kiểu thành công!']);
    }
}
