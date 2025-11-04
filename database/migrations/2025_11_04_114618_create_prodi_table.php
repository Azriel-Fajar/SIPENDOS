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
        Schema::create('prodi', function (Blueprint $table) {
            $table->id('id_prodi');
            $table->string('nama_prodi', 50);
            $table->enum('jenjang', ['D3', 'S1', 'S2', 'S3'])->default('S1');
            $table->foreignId('id_fakultas')->constrained('fakultas', 'id_fakultas')->default(null);
            $table->tinyInteger('status_aktif')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodi');
    }
};
