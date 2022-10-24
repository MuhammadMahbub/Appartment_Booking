<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::create([
            'subtitle'          => 'THE ULTIMATE LUXURY EXPERIENCE',
            'title'             => 'The Perfect Base For You',
            'button_text_1'     => 'take a tour',
            'button_text_2'     => 'Learn More',
            'button_url_1'      => '#',
            'button_url_2'      => '#',
            'banner_image_1'    => 'banner1.jpg',
            'banner_image_2'    => 'banner2.jpg',
        ]);
    }
}
