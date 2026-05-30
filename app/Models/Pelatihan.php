<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pelatihan extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'nama_pelatihan',
        'deskripsi',
        'kuota',
        'status_periode',
        'tanggal_pelatihan',
        'gambar'
    ];
}
