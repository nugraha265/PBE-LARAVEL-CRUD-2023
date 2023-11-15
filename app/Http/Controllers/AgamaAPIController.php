<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use Illuminate\Http\Request;

class AgamaAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Agama::all(),200);
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
        $agama = Agama::create($request->all());
        return response()->json(Agama::all(),201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Agama $agama)
    {
        return response()->json(Agama::all(),200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agama $agama)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agama $agama)
    {
        $agama->update($request->all());
        return response()->json(Agama::all(),200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agama $agama)
    {
        $agama->delete();
        return response()->json(null,204);
    }
}
