<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodRequest extends FormRequest
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
            'name'         => 'required',
            'type'         => 'required',
            'description'  => 'required',
            'image'        => 'required|image',
            'price'        => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'name.required'         => 'Name Field is Required',
            'type.required'         => 'Please Select a Type',
            'description.required'  => 'Please Write Some Description',
            'image.required'        => 'Please Select an Image',
            'image.image'           => 'Image Must be Image Type',
            'price.required'        => 'Please Set a Price',
            'price.numeric'         => 'Price Must be a Number'
        ];
    }
}
