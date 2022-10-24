<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutFacilityRequest extends FormRequest
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
            'title'       => 'required',
            'icon'        => 'required',
            'description' => 'required',
            'count'       => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Please Set the Title',
            'icon.required' => 'Please Set an icon',
            'description.required' => 'Please wride short Description',
            'count.required' => 'Count is Required',
            'count.numeric' => 'Count should be Numeric',
        ];
    }

}
