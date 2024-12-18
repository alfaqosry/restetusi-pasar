<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;

class SewatempatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $toko = Toko::all();

        return view('page.penyewaan.index', compact('toko'));
    }


    public function getsewabyid($id)
    {
        $user = User::with('tokos')->find(1); 
       
        return view('page.penyewaan.sewatokosaya', compact('user'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $toko = Toko::all();
        return view('page.penyewaan.create', compact('toko'));
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
        $toko = Toko::findOrFail($id);



        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $toko->biaya_restetusi,
            ),
            'customer_details' => array(
                'first_name' => Auth()->user()->name,
                'email' => Auth()->user()->email,
            )
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);



        $transaction = Transaction::create([
            'user_id' => Auth()->user()->id,
            'toko_id' => $toko->id,
            'price' => $toko->biaya_restetusi,
            'status' => 'pending',
            'snap_token' =>   $snapToken
        ]);


        return view('page.penyewaan.show', compact('toko', 'transaction'));
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
