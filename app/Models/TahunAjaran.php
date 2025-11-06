<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TahunAjaran extends Model
{
    use HasFactory;

    protected $table = 'tahun_ajaran';
    protected $primaryKey = 'id_tahun_ajaran';
    public $timestamps = false;

    protected $fillable = [
        'tahun_mulai',
        'tahun_selesai',
        'status_aktif',
    ];

    public function semester(): HasMany
    {
        return $this->hasMany(Semester::class, 'id_semester', 'id_semester');
    }

    public function jadwal(): HasMany
    {
        return $this->hasMany(Jadwal::class, 'id_jadwal', 'id_jadwal');
    }
}
