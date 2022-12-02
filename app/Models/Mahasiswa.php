<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';
    protected $fillable = [
        'npm',
        'nama',
        'prodi',
    ];

    public function kartu_mahasiswa(){
        return $this->hasOne('App\Models\KartuMahasiswa');
    }
}
