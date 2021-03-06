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
use Illuminate\Support\Facades\Auth;

class PerrosController
{


    /**
     * @param Perro $perros
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Perro $perros)
    {
        return view('perros.show',
            [
                'perros' => $perros
            ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('perros.add');
    }


    /**
     * @param CreatePerroRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CreatePerroRequest $request){

        $perro = $request->rules();
        $user = $request->user();

        Perro::create([
            'name'   => $request->input('name'),
            'user_id' => $user->id,
            'race'    => $request->input('race'),
            'weight'    => $request->input('weight'),
            'image'     => $request->input('image'),
            'color'     => $request->input('color'),
            'cut'     => $request->input('cut'),
            'notes'     => $request->input('notes'),
            'sex'       => $request->get('sex'),
            'born_date' => $request->input('born_date'),
            'transport' => $request->input('transport')
        ]);

        return redirect('/');
    }
}