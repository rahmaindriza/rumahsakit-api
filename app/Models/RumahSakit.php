<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Model
{
    protected $table = 'rumah_sakits'; // singular, bukan 'rumah_sakits'
    protected $fillable = [
        'nama', 'alamat', 'telepon', 'tipe', 'latitude', 'longitude'
    ];
}
