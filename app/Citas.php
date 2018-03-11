<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Perro;
use App\User;

class Citas extends Model
{

    /**
     * @var string
     */
    protected $table = 'citas';

    /**
     * @var array
     */
    protected $fillable = [
        'id_perro',
        'id_usuario',
        'fecha',
        'hora'
    ];
}
