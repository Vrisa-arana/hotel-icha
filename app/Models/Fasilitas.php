<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Fasilitas  extends Model
{
    use HasFactory;

    protected $table = 'fasilitas';

    protected $fillable = [
        'id',
        'id_hotel',
        'nama_fasilitas',
        'gambar',
        'deskripsi',
        'lampiran',
        'lampiran_nama' 
    ];

    protected $casts = [
        'lampiran' => 'array',
        'lampiran_nama' => 'array', 
    ];

    public function Hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class, 'id_hotel', 'id');
    }
}
