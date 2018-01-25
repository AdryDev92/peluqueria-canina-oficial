<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Perro extends Model
{
  protected $fillable = [
      'name','race','weight','cut','notes','color','image'
  ];

}