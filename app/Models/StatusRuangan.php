<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class StatusRuangan extends Model
{
    use HasFactory;

    protected $table = 'status_ruangan';
    protected $primaryKey = 'id_status_ruangan';
    public $timestamps = false;

    protected $fillable = [
        'id_jadwal',
        'id_ruangan',
        'id_hari',
        'id_dosen',
        'jam_mulai',
        'jam_selesai',
        'status',
    ];

    public function ruangan(): BelongsTo
    {
        return $this->belongsTo(Ruangan::class, 'id_ruangan', 'id_ruangan');
    }

    public function jadwal(): BelongsTo
    {
        return $this->belongsTo(Jadwal::class, 'id_jadwal', 'id_jadwal');
    }

    public function hari(): BelongsTo
    {
        return $this->belongsTo(Hari::class, 'id_hari', 'id_hari');
    }

    public function dosen(): BelongsTo
    {
        return $this->belongsTo(Dosen::class, 'id_dosen', 'id_dosen');
    }
}
