<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerUpdateRequest extends FormRequest
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
            'subtitle'          => 'required',
            'title'             => 'required',
            'button_text_1'     => 'required',
            'button_text_2'     => 'required',
            'banner_image_1'    => 'image',
            'banner_image_2'    => 'image',
        ];
    }

    public function messages()
    {
        return [
            'subtitle.required'         => 'Please Set a Subtitle',
            'title.required'            => 'Please Give a Title',
            'button_text_1.required'    => 'Please Set Text for 1st Button',
            'button_text_2.required'    => 'Please Set Text for 2nd Button',
            'banner_image_1.image'      => 'Banner Photo must be Image Type',
            'banner_image_2.image'      => 'Banner Photo must be Image Type',
        ];
    }

}
