<?php

namespace App\Http\Controllers;

use App\Http\Requests\TahunAjaranRequest;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class TahunAjaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tahun_ajaran = TahunAjaran::all();
        return view('tahun_ajaran.index',compact('tahun_ajaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tahun_ajaran.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TahunAjaranRequest $request)
    {
        $tahunAjaran = new TahunAjaran;
        $tahunAjaran->fill($request->validated());
        $tahunAjaran->save();

        return redirect()->route('tahun_ajaran.index')->with('success', 'Tahun Ajaran berhasil ditambahkan!');
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
        $tahun_ajaran = TahunAjaran::find($id);
        return view('tahun_ajaran.edit',compact('tahun_ajaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TahunAjaranRequest $request, string $id)
    {
        $tahunAjaran =TahunAjaran::find($id);
        $tahunAjaran->fill($request->validated());
        $tahunAjaran->save();

        return redirect()->route('tahun_ajaran.index')->with('success', 'Tahun Ajaran berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tahun_ajaran = TahunAjaran::find($id);
        $tahun_ajaran->delete();
        return redirect()->route('tahun_ajaran.index')->with('success', 'Tahun Ajaran berhasil dihapus!');

    }
}
