<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewatempat extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'toko_id',
        'batas_sewa',
  
    ];
    protected $table = 'sewatempat';
    
}
