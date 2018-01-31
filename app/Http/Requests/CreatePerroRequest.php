<?php
/**
 * Created by PhpStorm.
 * User: adry
 * Date: 24/1/18
 * Time: 21:18
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class CreatePerroRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required', 'max: 80'
            ],
            'race' => [
                'required', 'max: 80'
            ],
            'weight' => [
                'required', 'max: 10'
            ],
            'image' => [
                'required'
            ],
            'sex' => [
              'required'
            ],
            'color' => [
                'required', 'max: 20'
            ],
            'cut' => [
                'required', 'max: 100'
            ],


        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Información incorrecta',
            'name.max' => 'Número de caracteres erróneo',
            'race.required' => 'Información incorrecta',
            'race.max' => 'Número de caracteres erróneo',
            'weight.required' => 'Información incorrecta',
            'weight.max' => 'Número de caracteres erróneo',
            'image.required' => 'Imagen requerida',
            'color.required' => 'Información requerida',
            'color.max' => 'Número de caracteres erróneo',
            'cut.required' => 'Información incorrecta',
            'cut.max' => 'Número de caracteres erróneo'
        ];
    }

}