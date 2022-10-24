<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TitleAndBannerSettingRequest extends FormRequest
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
            'testimonial_section_subtitle'  => 'required',
            'testimonial_section_title'     => 'required',
            'blog_section_subtitle'         => 'required',
            'blog_section_title'            => 'required',
            'about_page_subtitle'           => 'required',
            'about_page_title'              => 'required',
            'about_page_banner'             => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'contact_page_subtitle'         => 'required',
            'contact_page_title'            => 'required',
            'contact_page_banner'           => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'food_page_subtitle'            => 'required',
            'food_page_title'               => 'required',
            'food_page_banner'              => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'restaurant_page_subtitle'      => 'required',
            'restaurant_page_title'         => 'required',
            'restaurant_page_banner'        => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'places_page_subtitle'          => 'required',
            'places_page_title'             => 'required',
            'places_page_banner'            => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'offers_page_subtitle'          => 'required',
            'offers_page_title'             => 'required',
            'offers_page_banner'            => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'room_section_subtitle'         => 'required',
            'room_section_title'            => 'required',
            'room_page_subtitle'            => 'required',
            'room_page_title'               => 'required',
            'room_page_banner'              => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gallery_page_subtitle'         => 'required',
            'gallery_page_title'            => 'required',
            'gallery_page_banner'           => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'news_page_subtitle'            => 'required',
            'news_page_title'               => 'required',
            'news_page_banner'              => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'search_page_subtitle'          => 'required',
            'search_page_title'             => 'required',
            'search_page_banner'            => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'booking_page_subtitle'         => 'required',
            'booking_page_title'            => 'required',
            'booking_page_banner'           => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
