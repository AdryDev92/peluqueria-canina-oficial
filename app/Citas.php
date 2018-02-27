<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Perro;
use App\User;

class Citas extends Model
{
    protected $table = 'citas';
    protected $fillable = [
        'id',
        'id_perro',
        'id_usuario',
        'fecha',
        'hora'
    ];
}
