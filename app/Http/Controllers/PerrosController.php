<?php
/**
 * Created by PhpStorm.
 * User: adry
 * Date: 24/1/18
 * Time: 21:04
 */

namespace App\Http\Controllers;

use App\Http\Requests\CreatePerroRequest;
use App\Perro;

class PerrosController
{


    public function show(Perro $perros)
    {
        return view('perros.show',
            [
                'perros' => $perros
            ]);
    }

    public function create()
    {
        return view('perros.add');
    }


    public function store()
    {


    }
}