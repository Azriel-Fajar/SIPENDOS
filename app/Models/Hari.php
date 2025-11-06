<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hari extends Model
{
    use HasFactory;

    protected $table = 'hari';
    protected $primaryKey = 'id_hari';
    public $timestamps = false;

    protected $fillable = [
        'nama_hari',
    ];

    public function statusRuangan(): HasMany
    {
        return $this->hasMany(StatusRuangan::class, 'id_ruangan', 'id_ruangan');
    }

    public function jadwal(): HasMany
    {
        return $this->hasMany(Jadwal::class, 'id_jadwal', 'id_jadwal');
    }
}
