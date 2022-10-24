<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TitleAndBannerSettingRequest;
use App\Models\TitleAndBannerSetting;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TitleAndBannerSettingController extends Controller
{
    public function title_banner_index(){
        return view('admin.title_banners.index',[
            'title_banner' => TitleAndBannerSetting::first(),
        ]);
    }

    public function title_banner_update(TitleAndBannerSettingRequest $request, $id){

        $settings = TitleAndBannerSetting::findOrFail($id);
        $settings->update([
            'testimonial_section_subtitle' => $request->testimonial_section_subtitle,
            'testimonial_section_title'    => $request->testimonial_section_title,
            'blog_section_subtitle'        => $request->blog_section_subtitle,
            'blog_section_title'           => $request->blog_section_title,
            'about_page_subtitle'          => $request->about_page_subtitle,
            'about_page_title'             => $request->about_page_title,
            'contact_page_subtitle'        => $request->contact_page_subtitle,
            'contact_page_title'           => $request->contact_page_title,
            'food_page_subtitle'           => $request->food_page_subtitle,
            'food_page_title'              => $request->food_page_title,
            'restaurant_page_subtitle'     => $request->restaurant_page_subtitle,
            'restaurant_page_title'        => $request->restaurant_page_title,
            'places_page_subtitle'         => $request->places_page_subtitle,
            'places_page_title'            => $request->places_page_title,
            'offers_page_subtitle'         => $request->offers_page_subtitle,
            'offers_page_title'            => $request->offers_page_title,
            'room_section_subtitle'        => $request->room_section_subtitle,
            'room_section_title'           => $request->room_section_title,
            'room_page_subtitle'           => $request->room_page_subtitle,
            'room_page_title'              => $request->room_page_title,
            'gallery_page_subtitle'        => $request->gallery_page_subtitle,
            'gallery_page_title'           => $request->gallery_page_title,
            'news_page_subtitle'           => $request->news_page_subtitle,
            'news_page_title'              => $request->news_page_title,
            'search_page_subtitle'         => $request->search_page_subtitle,
            'search_page_title'            => $request->search_page_title,
            'booking_page_subtitle'        => $request->booking_page_subtitle,
            'booking_page_title'           => $request->booking_page_title,
            'updated_at'                   =>Carbon::now(),
        ]);

        if ($request->hasFile('about_page_banner'))
        {
           $image = $request->file('about_page_banner');
           $name = 'about'.time().'.'.$image->getClientOriginalExtension();
           $destinationPath = public_path('/uploads/title&banners/');
           $image->move($destinationPath, $name);
           $settings->about_page_banner = $name;
        }
        if ($request->hasFile('contact_page_banner'))
        {
           $image = $request->file('contact_page_banner');
           $name =  'contact'.time().'.'.$image->getClientOriginalExtension();
           $destinationPath = public_path('/uploads/title&banners/');
           $image->move($destinationPath, $name);
           $settings->contact_page_banner = $name;
        }
        if ($request->hasFile('food_page_banner'))
        {
           $image = $request->file('food_page_banner');
           $name = 'food'.time().'.'.$image->getClientOriginalExtension();
           $destinationPath = public_path('/uploads/title&banners/');
           $image->move($destinationPath, $name);
           $settings->food_page_banner = $name;
        }
        if ($request->hasFile('restaurant_page_banner'))
        {
           $image = $request->file('restaurant_page_banner');
           $name = 'restaurant'.time().'.'.$image->getClientOriginalExtension();
           $destinationPath = public_path('/uploads/title&banners/');
           $image->move($destinationPath, $name);
           $settings->restaurant_page_banner = $name;
        }
        if ($request->hasFile('places_page_banner'))
        {
           $image = $request->file('places_page_banner');
           $name = 'places'.time().'.'.$image->getClientOriginalExtension();
           $destinationPath = public_path('/uploads/title&banners/');
           $image->move($destinationPath, $name);
           $settings->places_page_banner = $name;
        }
        if ($request->hasFile('offers_page_banner'))
        {
           $image = $request->file('offers_page_banner');
           $name = 'offers'.time().'.'.$image->getClientOriginalExtension();
           $destinationPath = public_path('/uploads/title&banners/');
           $image->move($destinationPath, $name);
           $settings->offers_page_banner = $name;
        }
        if ($request->hasFile('room_page_banner'))
        {
           $image = $request->file('room_page_banner');
           $name = 'room'.time().'.'.$image->getClientOriginalExtension();
           $destinationPath = public_path('/uploads/title&banners/');
           $image->move($destinationPath, $name);
           $settings->room_page_banner = $name;
        }
        if ($request->hasFile('gallery_page_banner'))
        {
           $image = $request->file('gallery_page_banner');
           $name = 'gallery'.time().'.'.$image->getClientOriginalExtension();
           $destinationPath = public_path('/uploads/title&banners/');
           $image->move($destinationPath, $name);
           $settings->gallery_page_banner = $name;
        }
        if ($request->hasFile('news_page_banner'))
        {
           $image = $request->file('news_page_banner');
           $name = 'news'.time().'.'.$image->getClientOriginalExtension();
           $destinationPath = public_path('/uploads/title&banners/');
           $image->move($destinationPath, $name);
           $settings->news_page_banner = $name;
        }
        if ($request->hasFile('search_page_banner'))
        {
           $image = $request->file('search_page_banner');
           $name = 'search'.time().'.'.$image->getClientOriginalExtension();
           $destinationPath = public_path('/uploads/title&banners/');
           $image->move($destinationPath, $name);
           $settings->search_page_banner = $name;
        }
        if ($request->hasFile('booking_page_banner'))
        {
           $image = $request->file('booking_page_banner');
           $name = 'booking'.time().'.'.$image->getClientOriginalExtension();
           $destinationPath = public_path('/uploads/title&banners/');
           $image->move($destinationPath, $name);
           $settings->booking_page_banner = $name;
        }
        if ($request->hasFile('room_section_bg_image'))
        {
           $image = $request->file('room_section_bg_image');
           $name = 'room_section'.time().'.'.$image->getClientOriginalExtension();
           $destinationPath = public_path('/uploads/title&banners/');
           $image->move($destinationPath, $name);
           $settings->room_section_bg_image = $name;
        }

        $settings->save();


        return back()->with('success', 'Title And Banner Settings updated successfully');
    }
}
