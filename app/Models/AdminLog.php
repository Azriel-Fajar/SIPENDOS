<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdminLog extends Model
{
    use HasFactory;

    protected $table = 'admin_log';
    protected $primaryKey = 'id_log';
    const CREATED_AT = 'waktu';
    const UPDATED_AT = null;

    protected $fillable = [
        'aksi',
        'deskripsi'
    ];

    public function admin(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_admin', 'id_admin');
    }
}
