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
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id('id_jadwal');
            $table->foreignId('id_matakuliah')->constrained('matakuliah', 'id_matakuliah');
            $table->foreignId('id_kelas')->constrained('kelas', 'id_kelas');
            $table->foreignId('id_ruangan')->constrained('ruangan', 'id_ruangan');
            $table->foreignId('id_tahun_ajaran')->constrained('tahun_ajaran', 'id_tahun_ajaran');
            $table->foreignId('id_semester')->constrained('semester', 'id_semester');
            $table->foreignId('id_prodi')->constrained('prodi', 'id_prodi');
            $table->enum('bidang_minat', ['Jaringan', 'Software', 'Data Science']);
            $table->foreignId('id_hari')->constrained('hari', 'id_hari');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->foreignId('id_dosen_1')->constrained('dosen', 'id_dosen');
            $table->foreignId('id_dosen_2')->constrained('dosen', 'id_dosen');
            $table->foreignId('id_dosen_3')->constrained('dosen', 'id_dosen');
            $table->foreignId('id_dosen_4')->constrained('dosen', 'id_dosen');
            $table->enum('status_jadwal', ['Aktif', 'Pending', 'Revisi', 'Bentrok'])->default('Aktif');
            $table->timestamp('tanggal_dibuat')->useCurrent();
            $table->timestamp('tanggal_update')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal');
    }
};
