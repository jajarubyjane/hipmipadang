<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usahas extends Model
{
    use HasFactory;
    protected $table = 'usaha';
    protected $fillable = [
        'id_usaha',
        'nama_usaha',
        'keterangan',
        'foto',
    ];
}
