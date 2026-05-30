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
        Schema::table('pelatihans', function (Blueprint $table) {
            $table->text('deskripsi')->change();
            $table->integer('kuota')->after('deskripsi');
            $table->string('status_periode')->after('kuota');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pelatihans', function (Blueprint $table) {
            $table->string('deskripsi')->change();
            $table->dropColumn('kuota', 'status_periode');
        });
    }
};
