<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas';
    public $timestamps = false;

    protected $fillable = [
        'kode_kelas',
        'nama_kelas',
        'kapasitas',
        'id_matakuliah',
    ];

    public function matakuliah(): BelongsTo
    {
        return $this->belongsTo(Matakuliah::class, 'id_matakuliah', 'id_matakuliah');
    }

    public function jadwal(): HasOne
    {
        return $this->hasOne(Jadwal::class, 'id_jadwal', 'id_jadwal');
    }
}
