<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
        //
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
