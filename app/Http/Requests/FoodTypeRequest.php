<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodTypeRequest extends FormRequest
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
            'name'         => 'required|unique:food_types',
            'icon'         => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'         => 'Name Field is Required',
            'name.unique'           => 'This Name Already taken',
            'icon.required'         => 'Please Set an Icon',
        ];
    }
}
