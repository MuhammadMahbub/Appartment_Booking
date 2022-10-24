<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutFacilityUpdateRequest extends FormRequest
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
            'title_edit'       => 'required',
            'icon_edit'        => 'required',
            'description_edit' => 'required',
            'count_edit'       => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'title_edit.required' => 'Please Set the Title',
            'icon_edit.required' => 'Please Set an icon',
            'description_edit.required' => 'Please wride short Description',
            'count_edit.required' => 'Count is Required',
            'count_edit.numeric' => 'Count should be Numeric',
        ];
    }
}
