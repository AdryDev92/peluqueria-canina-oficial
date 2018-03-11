<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valoraciones extends Model
{

    protected $table = 'Valoraciones';
    protected $fillable = [
        'rate'
    ];
}
