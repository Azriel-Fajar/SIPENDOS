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
        Schema::create('status_ruangan', function (Blueprint $table) {
            $table->id('id_status_ruangan');
            $table->foreignId('id_jadwal')->constrained('jadwal', 'id_jadwal');
            $table->foreignId('id_ruangan')->constrained('ruangan', 'id_ruangan');
            $table->foreignId('id_hari')->constrained('hari', 'id_hari');
            $table->foreignId('id_dosen')->constrained('dosen', 'id_dosen');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->enum('status', ['Terpakai', 'Kosong'])->default('Kosong');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_ruangan');
    }
};
