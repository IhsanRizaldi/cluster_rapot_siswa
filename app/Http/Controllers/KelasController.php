<?php

namespace App\Http\Controllers;

use App\Http\Requests\KelasRequest;
use App\Models\Kelas;
use App\Models\TahunAjaran;
use App\Models\Tingkat;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Kelas::all();
        return view('kelas.index',compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tahun = TahunAjaran::all();
        $tingkat = Tingkat::all();
        return view('kelas.create',compact('tahun','tingkat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KelasRequest $request)
    {
        $kelas = new Kelas;
        $kelas->fill($request->validated());
        $kelas->save();

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil ditambahkan!');
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
        $tahun = TahunAjaran::all();
        $tingkat = Tingkat::all();
        $kelas = Kelas::find($id);
        return view('kelas.edit',compact('kelas','tingkat','tahun'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KelasRequest $request, string $id)
    {
        $kelas = Kelas::find($id);
        $kelas->fill($request->validated());
        $kelas->save();

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();
        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil dihapus!');
    }
}
