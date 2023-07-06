<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
    use HasFactory;
    protected $table = 'permintaan';
    protected $fillable = [
        'nama',
        'notlp',
        'email',
        'domisili',
        'agama',
        'katdoa',
        'doa',
        'kategori_id',
        'acara_id',
        'status',
        
    ];

    public function acara ()
        {
        return $this->belongsTo('App\Models\Acara');
        }

    public function kategori ()
        {
        return $this->belongsTo('App\Models\Kategori');
        }

}
