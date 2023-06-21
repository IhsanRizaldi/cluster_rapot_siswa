<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiswaRequest;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        if (isset($cari)) {
            $siswa = Siswa::where('nis','like','%'.$cari.'%')
            ->orWhere('nisn','like','%'.$cari.'%')
            ->orWhere('nama_lengkap','like','%'.$cari.'%')
            ->orWhere('tempat_lahir','like','%'.$cari.'%')
            ->orWhere('tanggal_lahir','like','%'.$cari.'%')
            ->latest()->paginate(5);
            $user = User::get();
            return view('siswa.index',compact('siswa','user'));
        }
        $siswa = Siswa::latest()->paginate(5);
        $user = User::get();
        return view('siswa.index',compact('siswa','user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::get();
        return view('siswa.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SiswaRequest $request)
    {
        $siswa = new Siswa;
        $siswa->fill($request->validated());
        $siswa->save();
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan!');
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
        $siswa = Siswa::find($id);
        return view('siswa.edit',compact('siswa','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SiswaRequest $request, string $id)
    {
        $siswa = Siswa::find($id);
        $siswa->fill($request->validated());
        $siswa->save();
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil dihapus!');
    }
}
