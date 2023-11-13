<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use Illuminate\Http\Request;

class agamaController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agamas = Agama::all();
        return view('agama.index', compact('agamas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agama.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $agama = new Agama;
        $agama->nama_agama = $request->nama_agama;
        $agama->save();
        return redirect('/agama');
    }

    /**
     * Display the specified resource.
     */
    public function show(Agama $agama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agama $agama, $id)
    {
        $agama = Agama::find($id);
        return view('agama.edit', compact('agama'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agama $agama, $id)
    {
        $agama = Agama::find($id);
        $agama->nama_agama = $request->nama_agama;
        $agama->save();
        return redirect('/tabel-agama');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agama $agama, $id)
    {
        $agama = Agama::find($id);
        $agama->delete();
        return redirect('/agama');
    }
}
