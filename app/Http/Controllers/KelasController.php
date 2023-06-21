<?php

namespace App\Http\Controllers;

use App\Http\Requests\KelasRequest;
use App\Models\Kelas;
use App\Models\TahunAjaran;
use App\Models\Tingkat;
use App\Models\User;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        if(isset($cari)){
            $kelas = Kelas::where('nama_kelas','like','%'.$cari.'%')
            ->orWhere('kode_kelas','like','%'.$cari.'%')
            ->latest()->paginate(5);
            $user = User::get();
            return view('kelas.index',compact('kelas','user'));
        }

        $kelas = Kelas::latest()->paginate(5);
        $user = User::get();
        return view('kelas.index',compact('kelas','user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tahun = TahunAjaran::all();
        $tingkat = Tingkat::all();
        $user = User::get();
        return view('kelas.create',compact('tahun','tingkat','user'));
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
        $user = User::get();
        $tingkat = Tingkat::all();
        $kelas = Kelas::find($id);
        return view('kelas.edit',compact('kelas','tingkat','tahun','user'));
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
