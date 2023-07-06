<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'alamat',
        'ttl',
        'sosmed',
        'no_tlp',
        'email',
        'ktp',
        'npwp',
        'shoot',
        'tanggalshoot',
        'ket',
        'foto',
        'tanggalshootterakhir'
    ];
}
