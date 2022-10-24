<?php

namespace Database\Seeders;

use App\Models\TitleAndBannerSetting;
use Illuminate\Database\Seeder;

class TitleAndBannerSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TitleAndBannerSetting::create([
            'testimonial_section_subtitle' => 'TESTIMONIALS',
            'testimonial_section_title' => 'Client Feedback',

            'blog_section_subtitle' => 'Blog',
            'blog_section_title' => 'News Feeds',

            'room_section_subtitle' => 'ROOM TYPE',
            'room_section_title' => 'Inspired Loding',
            'room_section_bg_image' => 'bg_image.jpg',

            'about_page_subtitle' => 'THE ULTIMATE LUXURY',
            'about_page_title' => 'About Us',
            'about_page_banner' => 'title_banner.jpg',

            'contact_page_subtitle' => 'THE ULTIMATE LUXURY',
            'contact_page_title' => 'Contact us',
            'contact_page_banner' => 'title_banner.jpg',

            'booking_page_subtitle' => 'THE ULTIMATE LUXURY',
            'booking_page_title' => 'Booking Confirmation',
            'booking_page_banner' => 'title_banner.jpg',

            'food_page_subtitle' => 'THE ULTIMATE LUXURY',
            'food_page_title' => 'Food Menu',
            'food_page_banner' => 'title_banner.jpg',

            'news_page_subtitle' => 'THE ULTIMATE LUXURY',
            'news_page_title' => 'News Feeds',
            'news_page_banner' => 'title_banner.jpg',

            'restaurant_page_subtitle' => 'THE ULTIMATE LUXURY',
            'restaurant_page_title' => 'Restaurant',
            'restaurant_page_banner' => 'title_banner.jpg',

            'places_page_subtitle' => 'THE ULTIMATE LUXURY',
            'places_page_title' => 'Nearest Places',
            'places_page_banner' => 'title_banner.jpg',

            'offers_page_subtitle' => 'THE ULTIMATE LUXURY',
            'offers_page_title' => 'Our Offers',
            'offers_page_banner' => 'title_banner.jpg',

            'room_page_subtitle' => 'THE ULTIMATE LUXURY',
            'room_page_title' => 'Ultimate Room',
            'room_page_banner' => 'title_banner.jpg',

            'gallery_page_subtitle' => 'THE ULTIMATE LUXURY',
            'gallery_page_title' => 'Room Details',
            'gallery_page_banner' => 'title_banner.jpg',

            'search_page_subtitle' => 'THE ULTIMATE LUXURY',
            'search_page_title' => 'Search Result',
            'search_page_banner' => 'title_banner.jpg',
        ]);
    }
}
