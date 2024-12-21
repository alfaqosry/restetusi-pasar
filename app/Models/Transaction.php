<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'price',
        'status',
        'snap_token',
        'metode_pembayaran',
        'order_id',
        'keterangan',
        'invoice_id'
    ];

    protected $table = 'transaction';

    

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

}
