<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Semester extends Model
{
    use HasFactory;

    protected $table = 'semester';
    protected $primaryKey = 'id_semester';
    public $timestamps = false;

    protected $fillable = [
        'nama_semester',
        'id_tahun_ajaran',
        'status_aktif',
    ];

    public function tahunAjaran(): BelongsTo
    {
        return $this->belongsTo(TahunAjaran::class, 'id_tahun_ajaran', 'id_tahun_ajaran');
    }

    public function jadwal(): HasMany
    {
        return $this->hasMany(Jadwal::class, 'id_jadwal', 'id_jadwal');
    }
}
