<?php

namespace App\Http\Controllers;

use App\Perro;

class PagesController extends Controller
{

    public function home(){
        $perros = Perro::orderBy('created_at', 'desc')->paginate(10);
        

        return view('home', [
            'perros' => $perros
        ]);
    }

}