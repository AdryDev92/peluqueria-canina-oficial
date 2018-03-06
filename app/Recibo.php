<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Citas;

class Recibo extends Model
{

    protected $table = 'recibo';
    protected $fillable = [
        'id',
        'id_cita',
        'coste',
        'total',
        'servicios'
    ];
}
