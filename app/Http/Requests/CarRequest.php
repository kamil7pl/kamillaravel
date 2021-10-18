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
            'brand' => [
                'required',
                'string'
            ],
            'model' => [
                'required',
                'string'
            ],
            'year_of_production' => [
                'required',
                'integer',
                'min:1900'
            ],
            'price' => [
                'nullable',                
                'integer'
            ]
        ];
    }
}
