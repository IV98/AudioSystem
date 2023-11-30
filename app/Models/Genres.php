<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    protected $table = "CAT_genres";

    protected $fillable = [
        'id',
        'nombre'
    ];
}
