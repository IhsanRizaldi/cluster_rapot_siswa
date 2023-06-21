<?php

namespace App\Http\Controllers;

use App\Http\Requests\TahunAjaranRequest;
use App\Models\TahunAjaran;
use App\Models\User;
use Illuminate\Http\Request;

class TahunAjaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        if(isset($cari)){
            $tahun_ajaran = TahunAjaran::where('nama_tahun_ajaran','like','%'.$cari.'%')
            ->orWhere('kode_tahun_ajaran','like','%'.$cari.'%')
            ->orWhere('is_active','like','%'.$cari.'%')
            ->latest()->paginate(5);
            $user = User::get();
            return view('tahun_ajaran.index',compact('tahun_ajaran','user'));
        }
            $tahun_ajaran = TahunAjaran::latest()->paginate(5);
            $user = User::get();
            return view('tahun_ajaran.index',compact('tahun_ajaran','user'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::get();
        return view('tahun_ajaran.create',compact('user'));
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
        $user = User::get();
        $tahun_ajaran = TahunAjaran::find($id);
        return view('tahun_ajaran.edit',compact('tahun_ajaran','user'));
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
