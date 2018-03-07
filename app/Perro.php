<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Perro extends Model
{
    /**
     * @var string
     */
    protected $table = 'perros';

    /**
     * Datos que pueden ser modificados programáticamente
     * @var array
     */
    protected $fillable = [
        'name',
        'race',
        'weight',
        'cut',
        'user_id',
        'notes',
        'color',
        'image',
        'sex',
        'born_date'
  ];

    /**
     * Un perro tiene una cita
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function hasDate(){
        return $this->hasOne(Citas::class);
    }

}