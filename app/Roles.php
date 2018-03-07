<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{

    protected $table = 'roles';


    /**
     * Tipos de roles que pueden ser asignados a los usuarios
     * @var array
     */
    protected $fillable = [
        'admin',
        'user'
    ];

    public function users(){
        return $this->belongsToMany(Roles::class);
    }
}
