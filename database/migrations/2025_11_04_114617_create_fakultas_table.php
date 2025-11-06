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
        Schema::create('fakultas', function (Blueprint $table) {
            $table->id('id_fakultas');
            $table->enum('kode_fakultas', ['FBS', 'FBIO', 'FEB', 'FH', 'FISKOM', 'FID', 'FKIK', 'FKIP', 'FPSI', 'FSM', 'FTEK', 'FPB', 'FTI', 'FTEO']);
            $table->string('nama_fakultas', 100);
            $table->tinyInteger('status_aktif')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fakultas');
    }
};
