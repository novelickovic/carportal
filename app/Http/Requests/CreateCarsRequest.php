<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCarsRequest extends FormRequest
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
            //
            'make'=>'required',
            'model'=>'required',
            'year'=>'required',
            'body_type'=>'required',
            'mileage'=>'required',
            'fuel'=>'required',
            'engine'=>'required',
            'transmission'=>'required',
            'horse_power'=>'required',
            'doors'=>'required',
            'seats'=>'required',
            'interior_color'=>'required',
            'exterior_color'=>'required',
            'description'=>'required',
            'price'=>'required'


        ];
    }

//    public function messages()
//    {
//        return [
//            'photo_id.required' => 'Please upload a thumbnail image for this car.'
//
//        ];
//    }
}
