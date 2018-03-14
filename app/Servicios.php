<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    protected $table = 'Servicios';
    protected $fillable = [
        'name',
        'price'
    ];
}