<?php

namespace App\Http\Controllers;

use App\Http\Requests\TingkatRequest;
use App\Models\Tingkat;
use Illuminate\Http\Request;

class TingkatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tingkat = Tingkat::all();
        return view('tingkat.index',compact('tingkat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tingkat.create');
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
        $tingkat = Tingkat::find($id);
        return view('tingkat.edit',compact('tingkat'));
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
