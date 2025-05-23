<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Policie;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PoliciesController extends Controller
{
   public function index()
    {
        $policies = Policie::latest()->paginate(10);
        return view('admin.policies.index', compact('policies'));
    }

    // public function create()
    // {
    //     return view('admin.policies.create');
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'title' => 'required|string|max:255',
    //         'content' => 'required',
    //     ]);

    //     Policie::create([
    //         'title' => $request->title,
    //         'slug' => Str::slug($request->title),
    //         'content' => $request->content,
    //     ]);

    //     return redirect()->route('admin.policies.index')->with('success', 'Thêm chính sách thành công.');
    // }

    public function edit(Policie $policy)
    {
        return view('admin.policies.edit', compact('policy'));
    }

    public function update(Request $request, Policie $policy)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        $policy->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
        ]);

        return redirect()->route('admin.policies.index')->with('success', 'Cập nhật thành công.');
    }

    public function destroy(Policie $policy)
    {
        $policy->delete();
        return redirect()->route('admin.policies.index')->with('success', 'Đã xóa.');
    }
}
