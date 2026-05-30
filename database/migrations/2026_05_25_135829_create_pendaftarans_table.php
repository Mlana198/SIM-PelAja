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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('pelatihans_id')->constrained('pelatihans')->onDelete('cascade');
            $table->date('tanggal_pendaftaran');
            $table->string('status_verifikasi_berkas')->default('pending');
            $table->string('status_seleksi_administrasi')->default('pending');
            $table->boolean('disetujui_oleh_kabid')->default(false);
            $table->text('catatan_keputusan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
