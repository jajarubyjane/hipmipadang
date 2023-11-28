<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beritas extends Model
{
    use HasFactory;
    protected $table = 'berita';
    protected $fileable = [
        'id_kategori',
        'judul_berita',
        'tanggal_berita',
        'isi_berita',
        'gambar_berita',
    ];
}
