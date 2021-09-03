<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'rocznik' =>[
                'required',
                'integer',
               'min:1900',
               'max:2021'
            ],
            'typ-silnika' =>[
                'required',
                'string'
            ],
            'pojemnosc-silnika' =>[
                'required',
                'integer',
               'min:1',
               'max:3'
            ],
            'typ-nadwozia' =>[
                'required',
                'string'
            ],
            'liczba-miejsc' =>[
                'required',
                'integer',
               'min:1',
               'max:10'
            ],
            'przebieg' =>[
                'required',
                'integer',
               'min:0'
            ],
            'moc-silnika' =>[
                'required',
                'integer',
               'min:50',
               'max:1000'
            ],
            'skrzynia-biegow' =>[
                'required',
                'string'
            ],
            'kolor' =>[
                'required',
                'string'
            ]
        ];
    }
}
