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

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
    public function penyewas()
    {
        return $this->belongsToMany(User::class, 'penyewans', 'toko_id', 'user_id');
    }
    
}
