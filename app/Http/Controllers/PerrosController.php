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
    public function show(Perro $perros){
        return view('perros.show', [
            'perros' => $perros
        ]);
    }

    public function create()
    {
        return view('perros.create');
    }

    public function store(CreatePerroRequest $request){
        Perro::create([
            'content'   => $request->input('content'),

        ]);

        return redirect('/');
    }
}