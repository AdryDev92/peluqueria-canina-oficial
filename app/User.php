<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'adress',
        'password',
        'username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token'
    ];


    /**
     * Indica los roles que puede tener un usuario
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles(){
        return $this->belongsToMany(User::class);
    }

    /**
     * Un usuario puede tener varios perros
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dogs(){
        return $this->hasMany(Perro::class);
    }

    /**
     * Un usuario pone una valoracion
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function values(){
        return $this->hasOne(Valoraciones::class);
    }

    /**
     * Un usuario puede escribir comentarios
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comment(){
        return $this->hasMany(Comentarios::class)->latest();
    }

    /**
     * Un usuario puede tener varios perros
     * @return \Illuminate\Database\Query\Builder|static
     */
    public function hasDog(){
        if( count(User::class->dogs()) ){
            return $this->dogs();
        }
    }

    public function logged(){
        return $this->hasOne(Logged::class);
    }

}
