<?php

namespace App\Http\Controllers;

use App\Models\Point;
use Illuminate\Http\Request;

class PointController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return Point::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $point = InterestPoint::create($request->all());
        return response()->json($point, 201);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo $request;
        $validated = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $point = Point::create($validated);
        return response()->json($point, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
