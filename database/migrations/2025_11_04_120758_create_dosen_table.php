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
        Schema::create('dosen', function (Blueprint $table) {
            $table->id('id_dosen');
            $table->string('kode_dosen', 5)->unique();
            $table->string('nama_dosen', 100);
            $table->enum('status_dosen', ['Dosen', 'Pejabat Struktural', 'Tenaga Kontrak'])->default('Dosen');
            $table->tinyInteger('status_aktif')->default(1);
            $table->foreignId('id_prodi')->constrained('prodi', 'id_prodi')->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosen');
    }
};
