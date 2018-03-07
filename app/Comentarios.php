<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{

    /**
     * @var string
     */
    protected $table = 'comments';

    /**
     * @var array
     */
    protected $fillable = [
        'content',
        'user',
        'coment_date'
    ];
}
