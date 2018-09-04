<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'title'=>'required',
            'body'=>'required',
            'category_id'=>'required',
            'tags'=>'required',
            'status'=>'required',
            'meta_title'=>'required',
            'meta_description' =>'required',
            'photo_id'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'photo_id.required' => 'Please upload a thumbnail image for this post.'

        ];
    }


}
