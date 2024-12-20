<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'amount',
        'due_date',
        'status',
  
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transaction()
    {
        return $this->belongsTo(Invoice::class);
    }
}
