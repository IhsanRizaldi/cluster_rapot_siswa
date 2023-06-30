<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        if (isset($cari)) {
            $user = User::where('name','like','%'.$cari.'%')
            ->orWhere('email','like','%'.$cari.'%')
            ->orWhere('role','like','%'.$cari.'%')
            ->latest()
            ->paginate(5);
            return view('users.index',compact('user'));
        }
        $user = User::latest()->paginate(5);
        return view('users.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::get();
        return view('users.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $siswa = new User;
        $siswa->fill($request->validated());
        $siswa->password = Hash::make($request->password);
        $siswa->save();
        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan!');
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
        $user = User::find($id);
        return view('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    {
        $user = User::find($id);
        $user->fill($request->validated());
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('user.index')->with('success', 'User berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User berhasil dihapus!');
    }
}
