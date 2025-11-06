<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Prodi extends Model
{
    use HasFactory;

    protected $table = 'prodi';
    protected $primaryKey = 'id_prodi';
    public $timestamps = false;

    protected $fillable = [
        'nama_prodi',
        'jenjang',
        'id_fakultas',
        'status_aktif',
    ];

    public function dosen(): HasMany
    {
        return $this->hasMany(Dosen::class, 'id_dosen', 'id_dosen');
    }

    public function fakultas(): BelongsTo
    {
        return $this->belongsTo(Fakultas::class, 'id_fakultas', 'id_fakultas');
    }

    public function matakuliah(): HasMany
    {
        return $this->hasMany(Matakuliah::class, 'id_matakuliah', 'id_matakuliah');
    }

    public function jadwal(): HasMany
    {
        return $this->hasMany(Jadwal::class, 'id_jadwal', 'id_jadwal');
    }
}
