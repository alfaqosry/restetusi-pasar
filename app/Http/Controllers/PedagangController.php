<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PedagangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedagang = User::where('role', 'pedagang')->get();
        return view('page.pedagang.index', compact('pedagang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('page.pedagang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'nik' => 'required|string|max:20',
            'no_hp' => 'required|string|max:15',
            'alamat' => 'required|string',
            'jenis_dagangan' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'nik' => $request->nik,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'jenis_dagangan' => $request->jenis_dagangan,
            'role' => 'pedagang',
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('success', 'Akun berhasil dibuat.');
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
        $pedagang = User::findOrFail($id);
        return view('page.pedagang.edit', compact('pedagang'));
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
        //
    }
}
