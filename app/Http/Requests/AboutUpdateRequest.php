<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutUpdateRequest extends FormRequest
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
            'start_year'            => 'required|numeric',
            'front_page_heading'    => 'required',
            'internal_page_heading' => 'required',
            'short_description'     => 'required',
            'video_back_image'      => 'image',
            'video_link'            => 'required',
            'facility_subtitle'     => 'required',
            'facility_title'        => 'required',
            'counter_subtitle'      => 'required',
            'counter_title'         => 'required',
            'blog_subtitle'         => 'required',
            'blog_title'            => 'required',
        ];
    }

    public function messages()
    {
        return [
            'start_year.required'               => 'Please Set Starting Year',
            'start_year.numeric'                => 'Starting Year Should be year type lkie 1900',
            'front_page_heading.required'       => 'Please Give a Frontend Heading',
            'internal_page_heading.required'    => 'Please Give a Internal Heading',
            'short_description.required'        => 'Please write Short Description',
            'video_back_image.image'            => 'Image must be Image Type',
            'video_link.required'               => 'Give the video link',
            'facility_subtitle.required'        => 'Please Give a Facility Subtitle',
            'facility_title.required'           => 'Please Give a Facility title',
            'counter_subtitle.required'         => 'Please Give a Counter Subtitle',
            'counter_title.required'            => 'Please Give a Counter title',
            'blog_subtitle.required'            => 'Please Give a Blog Subtitle',
            'blog_title.required'               => 'Please Give a Blog title',
        ];
    }

}
