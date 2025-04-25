<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadImage(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = $file->move(public_path('uploads/blog'), $fileName);

            return response()->json([
                'location' => asset('uploads/blog/' . $fileName)
            ]);
        }

        return response()->json(['error' => 'Không có file được gửi'], 400);
    }
}
