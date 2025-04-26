<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Level;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function getTypes($category_id)
    {
        $types = Type::where('category_id', $category_id)->get();
        return response()->json($types);
    }

    public function getLevels(Request $request, $type_id)
    {
        $category_id = $request->query('category_id');

        $levels = Level::where('type_id', $type_id)
            ->whereHas('type', function ($q) use ($category_id) {
                $q->where('category_id', $category_id);
            })->get();

        return response()->json($levels);
    }
}
