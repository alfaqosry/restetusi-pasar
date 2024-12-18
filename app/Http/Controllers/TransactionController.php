<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Sewatempat;
use App\Models\Toko;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $transaction = Transaction::all();
        return view('page.transaction.index', compact('transaction'));
    }


    public function success(Transaction $transaction)
    {


        $transaction->metode_pembayaran = "Online Payment";
        $transaction->status = "success";
        $transaction->save();

        $transaction->with('user')->with('toko')->first();


        $toko = Toko::find($transaction->toko_id);
        $toko->user_id = $transaction->user_id;
        $toko->save();

        return view('page.transaction.status', compact('transaction'));
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
        //
    }
}
