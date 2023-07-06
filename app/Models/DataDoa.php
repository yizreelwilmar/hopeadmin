<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataDoa extends Model
{
    use HasFactory;
    protected $table = 'datadoa';
    protected $fillable = [
        'nama',
        'no_tlp',
        'email',
        'alamat',
        'provinsi',
        'agama',
        'kat_doa',
        'acara_id',
        'note',
        'bible_study',
        'status',
    ];

    public function acara ()
        {
        return $this->belongsTo('App\Models\Acara');
        }
}
