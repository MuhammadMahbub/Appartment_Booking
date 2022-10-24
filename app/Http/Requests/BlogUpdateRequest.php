<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogUpdateRequest extends FormRequest
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
            'category_id'           => 'required',
            'title'                 => 'required|string|max:255|unique:blogs',
            'short_description'     => 'required|string',
            'long_description'      => 'required|string',
            'image'                 => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
