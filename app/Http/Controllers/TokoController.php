<?php

namespace App\Http\Controllers;
use App\Models\Toko;

use Illuminate\Http\Request;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $toko = Toko::all();
        return view('page.toko.index' , compact('toko'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('page.toko.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'kode_toko' => 'required|string|max:255',
            'luas' => 'required|numeric',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'biaya_restetusi' =>'required|numeric'
        ]);

      
        $filePath = null;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filePath = $file->storeAs('public/uploads/toko', $file->getClientOriginalName());
        }

        Toko::create([
            'kode_toko' => $request->kode_toko,
            'luas' => $request->luas,
            'deskripsi' => $request->deskripsi,
            'biaya_restetusi' => $request->biaya_restetusi,
            'foto' => $filePath ? str_replace('public/', 'storage/', $filePath) : null,
        ]);

        return redirect()->route('toko.index')->with('success', 'Data toko berhasil ditambahkan.');
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
        $toko = Toko::findOrFail($id);
        return view('page.toko.edit', compact('toko'));
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
