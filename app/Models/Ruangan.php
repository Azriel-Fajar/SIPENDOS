<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ruangan extends Model
{
    use HasFactory;

    protected $table = 'ruangan';
    protected $primaryKey = 'id_ruangan';
    public $timestamps = false;

    protected $fillable = [
        'kode_ruangan',
        'id_fakultas',
        'kapasitas',
    ];

    public function fakultas(): BelongsTo
    {
        return $this->belongsTo(Fakultas::class, 'id_fakultas', 'id_fakultas');
    }

    public function statusRuangan(): HasMany
    {
        return $this->hasMany(StatusRuangan::class, 'id_ruangan', 'id_ruangan');
    }

    public function jadwal(): HasMany
    {
        return $this->hasMany(Jadwal::class, 'id_jadwal', 'id_jadwal');
    }
}
