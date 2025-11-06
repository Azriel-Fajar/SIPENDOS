<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Fakultas extends Model
{
    use HasFactory;
    protected $table = 'fakultas';
    protected $primaryKey = 'id_fakultas';
    public $timestamps = false;

    protected $fillable = [
        'kode_fakultas',
        'nama_fakultas',
        'status_aktif',
    ];

    public function prodi(): HasMany
    {
        return $this->hasMany(Prodi::class, 'id_prodi', 'id_prodi');
    }

    public function ruangan(): HasMany
    {
        return $this->hasMany(Ruangan::class, 'id_ruangan', 'id_ruangan');
    }
}
