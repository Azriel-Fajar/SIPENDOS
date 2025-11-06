<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jadwal extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'jadwal';
    protected $primaryKey = 'id_jadwal';

    protected $fillable = [
        'id_matakuliah',
        'id_kelas',
        'id_ruangan',
        'id_tahun_ajaran',
        'id_semester',
        'id_prodi',
        'bidang_minat',
        'id_hari',
        'jam_mulai',
        'jam_selesai',
        'id_dosen_1',
        'id_dosen_2',
        'id_dosen_3',
        'id_dosen_4',
        'status_jadwal',
        'deleted_at',
    ];

    public function statusRuangan(): HasOne
    {
        return $this->hasOne(StatusRuangan::class, 'id_ruangan', 'id_ruangan');
    }

    public function matakuliah(): BelongsTo
    {
        return $this->belongsTo(Matakuliah::class, 'id_matakuliah', 'id_matakuliah');
    }

    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id_kelas');
    }

    public function ruangan(): BelongsTo
    {
        return $this->belongsTo(Ruangan::class, 'id_ruangan', 'id_ruangan');
    }

    public function tahunAjaran(): BelongsTo
    {
        return $this->belongsTo(TahunAjaran::class, 'id_tahun_ajaran', 'id_tahun_ajaran');
    }

    public function semester(): BelongsTo
    {
        return $this->belongsTo(Semester::class, 'id_semester', 'id_semester');
    }

    public function prodi(): BelongsTo
    {
        return $this->belongsTo(Prodi::class, 'id_prodi', 'id_prodi');
    }

    public function hari(): BelongsTo
    {
        return $this->belongsTo(Hari::class, 'id_hari', 'id_hari');
    }

    public function dosen1(): BelongsTo
    {
        return $this->belongsTo(Dosen::class, 'id_dosen_1', 'id_dosen');
    }

    public function dosen2(): BelongsTo
    {
        return $this->belongsTo(Dosen::class, 'id_dosen_2', 'id_dosen');
    }

    public function dosen3(): BelongsTo
    {
        return $this->belongsTo(Dosen::class, 'id_dosen_3', 'id_dosen');
    }

    public function dosen4(): BelongsTo
    {
        return $this->belongsTo(Dosen::class, 'id_dosen_4', 'id_dosen');
    }
}
