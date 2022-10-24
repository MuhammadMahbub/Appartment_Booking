<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutFeatureRequest extends FormRequest
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
            'name_1'         => 'required',
            'feature_icon_1' => 'required',
            'name_2'         => 'required',
            'feature_icon_2' => 'required',
            'name_3'         => 'required',
            'feature_icon_3' => 'required',
            'name_4'         => 'required',
            'feature_icon_4' => 'required',
            'name_5'         => 'required',
            'feature_icon_5' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name_1.required' => 'Please Set the 1st name',
            'name_2.required' => 'Please Set the 2nd name',
            'name_3.required' => 'Please Set the 3rd name',
            'name_4.required' => 'Please Set the 4th name',
            'name_5.required' => 'Please Set the 5th name',
            'feature_icon_1.required' => 'Please Select the 1st icon',
            'feature_icon_2.required' => 'Please Select the 2nd icon',
            'feature_icon_3.required' => 'Please Select the 3rd icon',
            'feature_icon_4.required' => 'Please Select the 4th icon',
            'feature_icon_5.required' => 'Please Select the 5th icon',
        ];
    }
}
