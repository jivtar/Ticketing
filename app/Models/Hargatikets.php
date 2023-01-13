<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hargatikets extends Model
{
    protected $fillable = ['id_jadwal', 'id_tempatduduk', 'tiket_habis', 'sisa_tiket', 'harga'];
    // use HasFactory;
}
