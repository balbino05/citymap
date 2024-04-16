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
}
