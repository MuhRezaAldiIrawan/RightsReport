<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'hp',
        'jurusan',
        'prodi',
        'angkatan',
        'kategori_id',
        'rincian',
        'bukti',
        'status'

    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
