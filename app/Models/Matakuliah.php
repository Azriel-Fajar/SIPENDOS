<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Matakuliah extends Model
{
    use HasFactory;

    protected $table = 'matakuliah';
    protected $primaryKey = 'id_matakuliah';
    public $timestamps = false;

    protected $fillable = [
        'kode_matakuliah',
        'nama_matakuliah',
        'sks',
        'sks_total',
        'id_prodi',
        'status_aktif',
    ];

    public function prodi(): BelongsTo
    {
        return $this->belongsTo(Prodi::class, 'id_prodi', 'id_prodi');
    }

    public function kelas(): HasMany
    {
        return $this->hasMany(Kelas::class, 'id_kelas', 'id_kelas');
    }

    public function jadwal(): HasMany
    {
        return $this->hasMany(Jadwal::class, 'id_jadwal', 'id_jadwal');
    }
}
