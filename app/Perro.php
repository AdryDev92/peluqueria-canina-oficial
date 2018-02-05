<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Perro extends Model
{
    protected $table = 'create_table_perros';

    protected $fillable = [
      'name','race','weight','cut','notes','color','image','sex','born_date'
  ];

}