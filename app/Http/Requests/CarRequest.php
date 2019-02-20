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
            /*
             * validation
             */
            'car_name' => 'required',
            'fuel' => 'required',
            'transmission' => 'required',
            'wheel_drive' => 'required',
            'wheel_position' => 'required',
            'model' => 'required',
            'make' => 'required',
            'year' => 'required',
            'description' => 'required'
        ];
    }
}
