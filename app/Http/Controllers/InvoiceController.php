<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Transaction;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {}

    public function tagihanall()
    {
        $tagihan = Invoice::where('status','pending')->all();
    }

    public function tagihbyid($id)
    {
        $tagihan = Invoice::where('user_id', $id)->where('status','pending')->get();

        return view('page.tagihan.tagihanbyid', compact('tagihan'));
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


        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;
        $tagihan = Invoice::with('user')->find($id);
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $tagihan->amount,
            ),
            'customer_details' => array(
                'first_name' => $tagihan->user->name,
                'email' => $tagihan->user->email,
            )
        );

        $snaptoken = \Midtrans\Snap::getSnapToken($params);

        $transaction = Transaction::create([
            'user_id' => Auth()->user()->id,
            'invoice_id' => $id,
            'order_id' => $params['transaction_details']['order_id'],
            'price' => $tagihan->amount,
            'status' => 'pending',
            'snap_token' =>   $snaptoken,
            'keterangan' =>   "Retribusi",
        ]);





        return view('page.tagihan.show', compact('tagihan','transaction'));
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
