<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuMahasiswa extends Model
{
    use HasFactory;
    protected $table = 'kartu_mahasiswas';
    protected $fillable = [
        'no_ktm',
        'masa_berlaku',
    ];
}
