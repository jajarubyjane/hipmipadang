<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggotas extends Model
{
    use HasFactory;
    protected $table = 'anggota';
    protected $fillable = [
        'id_anggota',
        'id_jabatan',
        'id_divisi',
        'nama_anggota',
        'instagram',
        'gambar_anggota',
    ];

    public function jabatan()
    {
        return $this->belongsTo(Jabatans::class, 'id_jabatan');
    }
    public function divisi()
    {
        return $this->belongsTo(Divisis::class, 'id_divisi');
    }
}
