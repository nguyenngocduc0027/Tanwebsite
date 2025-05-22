<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
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
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ], [
            'name.required' => 'Tên là bắt buộc.',
            'image.mimes' => 'Hình ảnh phải là: jpeg, png, jpg, gif',
            'image.max' => 'Hình ảnh phải nhỏ hơn 2MB'
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/images/blogs/'), $imageName);
            $imagePath = '/images/blogs/' . $imageName;
        }

        Blog::create([
            'author_id' => $request->author_id, // Lưu đúng ID
            'date' => $request->date,
            'name' => $request->name,
            'subtitle' => $request->subtitle,
            'content' => $request->content,
            'image' => $imagePath
        ]);

        return response()->json(['message' => 'Blog đã được tạo.'], 200);
    }



    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    // Cập nhật blog
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ], [
            'name.required' => 'Tên là bắt buộc.',
            'image.mimes' => 'Hình ảnh phải là: jpeg, png, jpg, gif',
            'image.max' => 'Hình ảnh phải nhỏ hơn 2MB'
        ]);

        $blog = Blog::findOrFail($id);

        $imagePath = $blog->image;
        if ($request->hasFile('image')) {
            // Xoá ảnh cũ nếu có
            if ($imagePath && file_exists(public_path($imagePath))) {
                unlink(public_path($imagePath));
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/images/blogs/'), $imageName);
            $imagePath = '/images/blogs/' . $imageName;
        }
        $blog->update([
            'name' => $request->name,
            'subtitle' => $request->subtitle,
            'content' => $request->content,
            'image' => $imagePath
        ]);

        return response()->json(['message' => 'Cập nhật blog thành công.'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        // Nếu có ảnh thì xoá file
        if ($blog->image && file_exists(public_path($blog->image))) {
            unlink(public_path($blog->image));
        }

        $blog->delete();

        return response()->json(['message' => 'Blog đã được xoá.']);
    }
}
