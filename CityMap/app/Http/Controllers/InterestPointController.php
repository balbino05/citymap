<?php

namespace App\Http\Controllers;

use App\Models\InterestPoint;
use Illuminate\Http\Request;

class InterestPointController extends Controller
{
    public function index()
    {
        return InterestPoint::all();
    }

    public function store(Request $request)
    {
        $point = InterestPoint::create($request->all());
        return response()->json($point, 201);
    }

    public function category(Request $request)
    {
        $category = InterestPoint::where('category', '=', $request->name)->get();
        if($category->isEmpty()){
            $point = InterestPoint::all();
            return response()->json($point, 200);
        }
        return response()->json($category, 200);
    }


}
