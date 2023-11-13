<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Agama;
use Illuminate\Http\Request;

class karyawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('webpages.karyawan.index', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Agama $agama)
    {
        $agama = Agama::get(['id','nama_agama']);
        return view('webpages.karyawan.create', compact('agama'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $karyawan = new Karyawan;
        $karyawan -> nama_karyawan = $request -> nama_karyawan;
        $karyawan -> nik = $request -> nik;
        $karyawan -> jenis_pegawai = $request -> jenis_pegawai;
        $karyawan -> status_pegawai = $request -> status_pegawai;
        $karyawan -> kota_lahir = $request -> kota_lahir;
        $karyawan -> tgl_lahir = $request -> tgl_lahir;
        $karyawan -> pendidikan = $request -> pendidikan;
        $karyawan -> jenis_kelamin = $request -> jenis_kelamin;
        $karyawan -> alamat = $request -> alamat;
        $karyawan -> umur = $request -> umur;
        $karyawan -> no_hp = $request -> no_hp;
        $karyawan -> id_agama = $request -> id_agama;
        $karyawan -> save();

        return redirect('/tabel-karyawan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karyawan $karyawan, $id, Agama $agama)
    {
        $agama = Agama::all();
        $karyawan = Karyawan::find($id);
        return view('webpages.karyawan.edit',compact('karyawan', 'agama'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Karyawan $karyawan, $id)
    {
        $karyawan = Karyawan::find($id);
        $karyawan -> nama_karyawan = $request -> nama_karyawan;
        $karyawan -> nik = $request -> nik;
        $karyawan -> jenis_pegawai = $request -> jenis_pegawai;
        $karyawan -> status_pegawai = $request -> status_pegawai;
        $karyawan -> kota_lahir = $request -> kota_lahir;
        $karyawan -> tgl_lahir = $request -> tgl_lahir;
        $karyawan -> pendidikan = $request -> pendidikan;
        $karyawan -> jenis_kelamin = $request -> jenis_kelamin;
        $karyawan -> alamat = $request -> alamat;
        $karyawan -> umur = $request -> umur;
        $karyawan -> no_hp = $request -> no_hp;
        $karyawan -> id_agama = $request -> id_agama;
        $karyawan -> save();

        return redirect()->route('karyawan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karyawan $karyawan, $id)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->delete();
        return redirect('/tabel-karyawan');
    }
}
