<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwalevents extends Model
{
    protected $fillable = ['id_event', 'id_tempatduduk', 'id_artis', 'id_venue', 'tanggal', 'waktu_mulai', 'waktu_selesai'];
    // use HasFactory;
}
