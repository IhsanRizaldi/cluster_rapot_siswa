<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\SetKelas;
use App\Models\User;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Kelas::latest()->paginate(5);
        $user = User::get();
        return view('setnilai.index',compact('kelas','user'));
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
        $kelas = SetKelas::all();
        foreach ($kelas as $data) {
            $setnilai = new Nilai;
            $setnilai->setkelas_id = $data->id;
            $setnilai->bahasa_indonesia = 0;
            $setnilai->bahasa_inggris = 0;
            $setnilai->bahasa_jepang = 0;
            $setnilai->ilmu_pengetahuan_alam = 0;
            $setnilai->ilmu_pengetahuan_sosial = 0;
            $setnilai->matematika = 0;
            $setnilai->seni_budaya = 0;
            $setnilai->pendidikan_jasmani_dan_rohani = 0;
            $setnilai->pendidikan_agama_dan_budi_pekerti = 0;
            $setnilai->pendidikan_kewarganegaraan = 0;
            $setnilai->save();
        }
        return redirect()->route('setnilai.index')->with('success', 'Set Nilai berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::get();
        $nilai = Nilai::with('setkelas')->whereHas('setkelas', function($query) use (&$id){
            $query->where('kelas_id',$id);
        })->get();
        return view('setnilai.show',compact('nilai','user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $nilai = Nilai::with('setkelas')->whereHas('setkelas', function($query) use (&$id){
            $query->where('kelas_id',$id);
        })->get();
        $user = User::get();
        return view('setnilai.edit',compact('nilai','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        foreach ($request->nilai as $key => $value) {
            Nilai::where('setkelas_id',$key)->update($value);
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
