<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\Invoice; 
use App\Mail\InvoiceMail;
use Illuminate\Support\Facades\Mail;

class GenerateInvoice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'invoice:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate invoices every Tuesday';

    /**
     * Execute the console command.
     */
    public function handle()
    {

      

         // Logic untuk membuat tagihan
         $users = \App\Models\User::all(); // Ganti dengan logika pengambilan data yang sesuai

         foreach ($users as $user) {
            $invoice = Invoice::create([
                 'user_id' => $user->id,
                 'amount' => 100000, // Contoh jumlah tagihan
                 'due_date' => Carbon::now()->addDays(7),
                 'status' => 'pending',
             ]);

             Mail::to($invoice->user->email)->send(new InvoiceMail($invoice, $user));
             $this->info('Email dikirim ke ' . $invoice->user->email);
         }

        
 
         $this->info('Invoices generated successfully!');
    }
}
