<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiMisis extends Model
{
    use HasFactory;
    protected $table = 'visimisi';
    protected $fileable = [
        'visi',
        'misi',
    ];
}
