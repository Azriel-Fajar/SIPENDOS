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
        Schema::create('matakuliah', function (Blueprint $table) {
            $table->id('id_matakuliah');
            $table->string('kode_matakuliah', 10)->unique();
            $table->string('nama_matakuliah', 100);
            $table->integer('sks');
            $table->integer('sks_total')->default(0);
            $table->foreignId('id_prodi')->constrained('prodi', 'id_prodi');
            $table->tinyInteger('status_aktif')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matakuliah');
    }
};
