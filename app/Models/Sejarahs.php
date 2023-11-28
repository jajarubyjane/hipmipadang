<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sejarahs extends Model
{
    use HasFactory;
    protected $table = 'sejarah';
    protected $fillable = [
        'id_sejarah',
        'isi_sejarah',
        'foto',
    ];
}
