<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logged extends Model
{
    protected $table = 'Logged';
    protected $fillable = [
        'login_date'
    ];
}
