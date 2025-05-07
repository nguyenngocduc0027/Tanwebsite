<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Type;
use App\Models\Level;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
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
        $categories = Category::all();
        $types = Type::all();
        $levels = Level::all();
        return view('admin.products.create', compact('categories', 'types', 'levels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'nullable|string|max:50|unique:products,code',
            'price' => 'required|numeric',
            'sale_price' => 'nullable|numeric',
            'status' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif',
        ], [
            'name.required' => 'Cần nhập tên.',
            'code.unique' => 'Má sản phẩm đẫ tốn tại.',
            'price.required' => 'Cần nhập giá.',
            'status.required' => 'Cần nhập trạng thái.',
        ]);
    
        // Tạo sản phẩm
        $product = Product::create([
            'name' => $request->name,
            'code' => $request->code,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'status' => $request->status,
            'category_id' => $request->category_id,
            'type_id' => $request->type_id,
            'level_id' => $request->level_id,
            'description' => $request->description,
            'document' => $request->document,
        ]);
        // Lưu ảnh sản phẩm
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $image) {
                $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('/uploads/products'), $imageName);

                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => '/uploads/products/' . $imageName,
                    'is_thumbnail' => $index === 0 ? 1 : 0,
                    'position' => $index + 1,
                ]);
            }
        }

        return response()->redirectTo(route('admin.products.index'))->with('success', 'Thêm sản phẩm thành công!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::with('images')->findOrFail($id);
        $categories = Category::all();
        $types = Type::where('category_id', $product->category_id)->get();
        $levels = Level::where('type_id', $product->type_id)->get();

        return view('admin.products.edit', compact('product', 'categories', 'types', 'levels'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'nullable|string|max:50|unique:products,code,' . $product->id,
            'price' => 'required|numeric',
            'sale_price' => 'nullable|numeric',
            'status' => 'required',
            'category_id' => 'required|exists:categories,id',
            'type_id' => 'required|exists:types,id',
            'level_id' => 'required|exists:levels,id',
            'description' => 'nullable|string',
            'document' => 'nullable|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'name.required' => 'Cần nhập tên.',
            'code.unique' => 'Má sản phẩm đẫ tốn tại.',
            'price.required' => 'Cần nhập giá.',
            'status.required' => 'Cần nhập trạng thái.',
            'category_id.required' => 'Cần nhập danh mục.',
            'type_id.required' => 'Cần nhập loại.',
            'level_id.required' => 'Cần nhập kiểu.',
        ]);

        $product->update([
            'name' => $request->name,
            'code' => $request->code,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'status' => $request->status,
            'category_id' => $request->category_id,
            'type_id' => $request->type_id,
            'level_id' => $request->level_id,
            'description' => $request->description,
            'document' => $request->document,
        ]);

        // Nếu upload ảnh mới → xóa ảnh cũ + lưu ảnh mới
        if ($request->hasFile('images')) {
            foreach ($product->images as $oldImage) {
                if (file_exists(public_path($oldImage->image))) {
                    unlink(public_path($oldImage->image));
                }
                $oldImage->delete();
            }

            foreach ($request->file('images') as $index => $image) {
                $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('/uploads/products'), $imageName);

                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => '/uploads/products/' . $imageName,
                    'is_thumbnail' => $index === 0 ? 1 : 0,
                    'position' => $index + 1,
                ]);
            }
        }

        return response()->json(['success' => true, 'message' => 'Cập nhật sản phẩm thành công!']);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::with('images')->findOrFail($id);

        // Xóa ảnh trên server
        foreach ($product->images as $image) {
            $imagePath = public_path($image->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            $image->delete(); // Xóa record ảnh
        }

        // Xóa sản phẩm
        $product->delete();

        return response()->json(['message' => 'Xóa sản phẩm thành công']);
    }
}
