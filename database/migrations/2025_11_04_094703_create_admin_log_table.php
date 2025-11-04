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
        Schema::create('admin_log', function (Blueprint $table) {
            $table->id('id_log')->default(null);
            $table->foreignId('id_admin')->constrained('users', 'id_admin');
            $table->enum('aksi', ['Login', 'Logout', 'Tambah', 'Edit', 'Hapus']);
            $table->text('deskripsi')->nullable()->default(null);
            $table->timestamp('waktu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_log');
    }
};
