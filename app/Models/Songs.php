<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{
    protected $table = "tblSongs";

    protected $fillable = [
        'nombre',
        'artista',
        'album',
        'anio',
        'idGenero',
        'favorito',
        'url'
    ];
}
