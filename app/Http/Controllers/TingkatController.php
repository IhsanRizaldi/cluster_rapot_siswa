<?php

namespace App\Http\Controllers;

use App\Http\Requests\TingkatRequest;
use App\Models\Tingkat;
use App\Models\User;
use Illuminate\Http\Request;

class TingkatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        if(isset($cari)){
            $tingkat = Tingkat::where('nama_tingkat','like','%'.$cari.'%')
            ->orWhere('kode_tingkat','like','%'.$cari.'%')
            ->latest()->paginate(5);
            $user = User::get();
            return view('tingkat.index',compact('tingkat','user'));
        }
        $tingkat = Tingkat::latest()->paginate(5);
        $user = User::get();
        return view('tingkat.index',compact('tingkat','user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::get();
        return view('tingkat.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TingkatRequest $request)
    {
        $tingkat = new Tingkat;
        $tingkat->fill($request->validated());
        $tingkat->save();

        return redirect()->route('tingkat.index')->with('success', 'Tingkat berhasil ditambahkan!');
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
        $tingkat = Tingkat::find($id);
        return view('tingkat.edit',compact('tingkat','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TingkatRequest $request, string $id)
    {

        $tingkat =Tingkat::find($id);
        $tingkat->fill($request->validated());
        $tingkat->save();

        return redirect()->route('tingkat.index')->with('success', 'Tingkat berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tingkat = Tingkat::find($id);
        $tingkat->delete();
        return redirect()->route('tingkat.index')->with('success', 'Tingkat berhasil dihapus!');

    }
}
