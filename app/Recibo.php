<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Citas;

class Recibo extends Model
{

    /**
     * @var string
     */
    protected $table = 'recibo';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'id_cita',
        'coste',
        'total',
        'servicios'
    ];
}
