<?php

namespace App\Http\Controllers;

use App\Http\Requests\SetKelasRequest;
use App\Models\Kelas;
use App\Models\SetKelas;
use App\Models\Siswa;
use App\Models\TahunAjaran;
use App\Models\Tingkat;
use App\Models\User;
use Illuminate\Http\Request;

class SetKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Kelas::get();
        $setkelas = SetKelas::latest()->paginate(5);
        $user = User::get();
        return view('setkelas.index',compact('kelas','setkelas','user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = Kelas::all();
        $siswa = Siswa::all();
        $user = User::all();
        return view('setkelas.create',compact('kelas','siswa','user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SetKelasRequest $request)
    {
        foreach ($request->input('siswa_id') as $data) {
            $kelas = new SetKelas();
            $kelas->fill($request->validated());
            $kelas['siswa_id'] = $data;
            $kelas->save();
        }
        return redirect()->route('setkelas.index')->with('success', 'SetKelas berhasil ditambahkan!');
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
    public function edit(SetKelas $setkelas,$id)
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
        $setkelas = SetKelas::find($id);
        $setkelas->delete();
        return redirect()->route('setkelas.index')->with('success', 'Set Kelas berhasil dihapus!');
    }
}
