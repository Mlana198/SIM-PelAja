<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('laporan_pelatihans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pelatihans_id')->constrained('pelatihans')->onDelete('cascade');
            $table->foreignId('peserta_lolos_id')->constrained('peserta_lolos')->onDelete('cascade');
            $table->foreignId('kelulusans_id')->constrained('kelulusans')->onDelete('cascade');
            $table->string('file_laporan_pdf');
            $table->text('kendala_dan_solusi')->nullable();
            $table->double('rata_rata_nilai', 10, 2)->nullable();
            $table->text('ringkasan_pelatihan')->nullable();
            $table->date('tanggal_pelaporan')->nullable();
            $table->integer('total_pendaftar');
            $table->integer('total_peserta_lolos');
            $table->integer('total_peserta_lulus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_pelatihans');
    }
};
