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
        Schema::create('sertifikats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kelulusans_id')->constrained('kelulusans')->onDelete('cascade');
            $table->string('nomor_sertifikat')->unique();
            $table->string('file_sertifikat_path');
            $table->string('ditandatangani_oleh_nama');
            $table->string('ditandatangani_oleh_nip');
            $table->date('tanggal_terbit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sertifikats');
    }
};
