<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatans extends Model
{
    use HasFactory;
    protected $table = 'kegiatan';
    protected $fileable = [
        'nama_kegiatan',
        'alamat',
        'tanggal_kegiatan',
        'waktu_kegiatan',
    ];
}
