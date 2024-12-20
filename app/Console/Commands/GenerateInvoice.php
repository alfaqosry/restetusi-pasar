<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\Invoice; 

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
             Invoice::create([
                 'user_id' => $user->id,
                 'amount' => 100000, // Contoh jumlah tagihan
                 'due_date' => Carbon::now()->addDays(7),
                 'status' => 'pending',
             ]);
         }
 
         $this->info('Invoices generated successfully!');
    }
}
