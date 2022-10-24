<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutCounterUpdateRequest extends FormRequest
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
        session()->put(['id' => $this->id]);
        return [
            'user_name'       => 'required',
            'user_icon'       => 'required',
            'user_count'      => 'required|numeric',
            'review_name'     => 'required',
            'review_icon'     => 'required',
            'review_count'    => 'required|numeric',
            'country_name'    => 'required',
            'country_icon'    => 'required',
            'country_count'   => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'user_name.required'    => 'Please Set the User Part Title',
            'review_name.required'  => 'Please Set the Review Part Title',
            'country_name.required' => 'Please Set the Country Part Title',
            'user_icon.required'    => 'Please Set User Part Icon',
            'review_icon.required'  => 'Please Set Review Part Icon',
            'country_icon.required' => 'Please Set Country Part Icon',
            'country_count.numeric' => 'Counting Should be a Number',
            'country_count.required'=> 'Please Set Country Coverage No.',
            'user_count.numeric'    => 'Counting Should be a Number',
            'user_count.required'   => 'Please Set Happy Users No.',
            'review_count.numeric'  => 'Counting Should be a Number',
            'review_count.required' => 'Please Set Reviews No.',

        ];
    }
}
