<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_toko',
        'luas',
        'deskripsi',
        'foto',
        'biaya_restetusi'
    ];
    protected $table = 'toko';

   
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
