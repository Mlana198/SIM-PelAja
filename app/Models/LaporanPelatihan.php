<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LaporanPelatihan extends Model
{
    protected $table = 'laporan_pelatihans';

    protected $fillable = [
        'pelatihan_id',
        'peserta_lolos_id',
        'kelulusan_id',
        'file_laporan_pdf',
        'kendala_dan_solusi',
        'rata_rata_nilai',
        'ringkasan_pelatihan',
        'tanggal_pelaporan',
        'total_pendaftar',
        'total_peserta_lolos',
        'total_peserta_lulus',
    ];

    public function pelatihan(): BelongsTo
    {
        return $this->belongsTo(Pelatihan::class, 'pelatihan_id');
    }

    public function pesertaLolos(): BelongsTo
    {
        return $this->belongsTo(PesertaLolos::class, 'peserta_lolos_id');
    }

    public function kelulusan(): BelongsTo
    {
        return $this->belongsTo(Kelulusan::class, 'kelulusan_id');
    }
}
