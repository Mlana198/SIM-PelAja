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
        Schema::create('berita_admins', function (Blueprint $table) {
            $table->id();
            $table->string('judul_berita');
            $table->text('isi_berita');
            $table->string('gambar')->nullable();
            $table->date('tanggal_berita');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita_admins');
    }
};
