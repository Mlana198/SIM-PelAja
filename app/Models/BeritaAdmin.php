<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BeritaAdmin extends Model
{

    use HasFactory;
    use SoftDeletes;

    protected $table = 'berita_admins';
    protected $fillable = [
        'judul_berita',
        'isi_berita',
        'gambar',
        'tanggal_berita',
    ];
}
